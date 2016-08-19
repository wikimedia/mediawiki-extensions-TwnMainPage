<?php
/**
 * Project icons via CSS using SVGs with PNG fallbacks.
 *
 * @file
 * @author Niklas Laxström
 * @license GPL2+
 */

/**
 * Project icons via CSS using SVGs with PNG fallbacks.
 */
class ResourceLoaderProjectIconsModule extends ResourceLoaderModule {
	protected $targets = [ 'desktop', 'mobile' ];

	/**
	 * Get all urls.
	 * @return array
	 */
	protected function getData() {
		$handler = new ProjectHandler();
		$projects = $handler->getProjects();
		$icons = [];
		foreach ( $projects as $group ) {
			wfSuppressWarnings();
			$id = Sanitizer::escapeClass( $group->getId() );
			$icons[$id] = TranslateUtils::getIcon( $group, 100 );
			wfRestoreWarnings();
		}

		return $icons;
	}

	/**
	 * @see also resouces/css/ext.translate.mainpage.css
	 * @param $context ResourceLoaderContext
	 * @return array CSS styles
	 */
	public function getStyles( ResourceLoaderContext $context ) {
		$out = '';
		foreach ( $this->getData() as $key => $value ) {
			if ( !isset( $value['raster'] ) ) {
				continue;
			}

			$raster = $value['raster'];
			if ( !isset( $value['vector'] ) ) {
				$out .= <<<CSS
.project-icon-$key {
	background: transparent url($raster);
}


CSS;
			} else {
				$vector = $value['vector'];
				$out .= <<<CSS
.project-icon-$key {
	background: url($raster);
	background-image: -webkit-linear-gradient(transparent, transparent), url($vector);
	background-image: linear-gradient(transparent, transparent), url($vector);
}


CSS;
			}
		}

		return [ 'all' => $out ];
	}

	public function getModifiedTime( ResourceLoaderContext $context ) {
		$cache = wfGetCache( CACHE_ANYTHING );
		$key = wfMemcKey( 'resourceloader', 'twnmainpage', 'icons' );

		$data = $this->getData();
		$hash = md5( serialize( $data ) );

		$result = $cache->get( $key );
		if ( is_array( $result ) && $result['hash'] === $hash ) {
			return $result['timestamp'];
		}
		$timestamp = time();
		$cache->set( $key, [
			'hash' => $hash,
			'timestamp' => $timestamp,
		] );

		return $timestamp;
	}

	public function getType() {
		return self::LOAD_STYLES;
	}
}
