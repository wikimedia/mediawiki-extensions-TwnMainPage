<?php
declare( strict_types = 1 );

use Wikimedia\ObjectFactory\ObjectFactory;

/**
 * A simple job to update the CachedStat
 */
class CachedStatJob extends Job implements GenericParameterJob {
	public static function newFromSpec( array $spec ) {
		return new self( [ 'spec' => $spec ] );
	}

	public function __construct( array $params ) {
		parent::__construct( __CLASS__, $params );
		$this->params = $params;
		$this->removeDuplicates = true;
	}

	public function run() {
		ObjectFactory::getObjectFromSpec( $this->params['spec'] );
		return true;
	}
}
