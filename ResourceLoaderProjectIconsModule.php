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
	protected $targets = array( 'desktop', 'mobile' );

	/**
	 * Get all urls.
	 * @return array
	 */
	protected function getData() {
		$projects = ProjectHandler::getProjects();
		$icons = array();
		foreach( $projects as $group ) {
			wfSuppressWarnings();
			$icons[$group->getId()] = TranslateUtils::getIcon( $group, 100 );
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

		return array( 'all' => $out );
	}

	/**
	 * @param $context ResourceLoaderContext
	 * @return array|int|Mixed
	 */
	public function getModifiedTime( ResourceLoaderContext $context ) {
		$cache = wfGetCache( CACHE_ANYTHING );
		$key = wfMemcKey( 'resourceloader', 'twnmainpage', 'icons' );

		$data = $this->getData();
		$hash = md5( serialize( $data ) );

		$result = $cache->get( $key );
		if ( is_array( $result ) && $result['hash'] === $hash ) {
			return $result['timestamp'];
		}
		$timestamp = wfTimestamp();
		$cache->set( $key, array(
			'hash' => $hash,
			'timestamp' => $timestamp,
		) );
		return $timestamp;
	}
}
