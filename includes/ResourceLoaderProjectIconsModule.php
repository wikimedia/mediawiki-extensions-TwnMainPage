<?php
/**
 * Project icons via CSS using SVGs with PNG fallbacks.
 *
 * @file
 * @author Niklas Laxström
 * @license GPL2+
 */

use MediaWiki\Extension\Translate\Utilities\Utilities;
use MediaWiki\ResourceLoader\Context;
use MediaWiki\ResourceLoader\Module;

/**
 * Project icons via CSS using SVGs with PNG fallbacks.
 */
class ResourceLoaderProjectIconsModule extends Module {
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
			$id = Sanitizer::escapeClass( $group->getId() );
			$icons[$id] = Utilities::getIcon( $group, 100 );
		}

		return $icons;
	}

	/**
	 * @see also resouces/css/ext.translate.mainpage.less
	 * @param Context $context
	 * @return array CSS styles
	 */
	public function getStyles( Context $context ) {
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

	public function enableModuleContentVersion() {
		return true;
	}

	public function getType() {
		return self::LOAD_STYLES;
	}
}
