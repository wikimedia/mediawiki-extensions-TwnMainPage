<?php
/**
 * A job to update CachedStat
 *
 * @file
 */

 /**
  * A simple job to update the CachedStat
  */
class CachedStatJob extends Job {
	public static function newJob( CachedStat $stat ) {
		return new self( Title::newMainPage(), [ 'obj' => $stat, 'key' => $stat->getKey() ] );
	}

	/**
	 * @param Title $title
	 * @param array $params
	 * @param int $id
	 */
	public function __construct( $title, array $params, $id = 0 ) {
		parent::__construct( __CLASS__, $title, $params, $id );
		$this->params = $params;
		$this->removeDuplicates = true;
	}

	public function run() {
		$this->params['obj']->doUpdate();
		return true;
	}
}
