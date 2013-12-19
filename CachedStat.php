<?php
/**
 * Classes for caching stat numbers.
 *
 * @file
 * @author Niklas Laxström
 * @license GPL2+
 */

/**
 * Simple wrapper over object cache that supports
 * serving stale data while triggering update in the
 * background. The JobQueue should avoid executing
 * cache update jobs in parallel.
 */
class CachedStat implements DeferrableUpdate {
	/// @var string
	protected $key;

	/// @var array
	protected $worker;

	/// @var int
	protected $staleAge;

	/// @var int
	protected $expiredAge;

	/// @var string
	protected $onMiss;

	/**
	 * @param string $key Unique key for these values.
	 * @param int $staleAge Trigger background refresh job if values are older than this.
	 * @param int $expiredAge Do not use values older than this.
	 * @param array $worker Array with method and parameters.
	 * @param string $onMiss What to do on cache miss. 'update' or 'allow miss'.
	 */
	public function __construct( $key, $staleAge, $expiredAge, $worker, $onMiss = 'update' ) {
		$this->key = wfMemckey( __CLASS__, $key );
		$this->worker = $worker;

		$this->staleAge = $staleAge;
		$this->expiredAge = $expiredAge;

		$this->onMiss = $onMiss;
	}

	public function setCache( BagOStuff $cache ) {
		$this->cache = $cache;
	}

	protected function getCache() {
		return isset( $this->cache ) ? $this->cache : wfGetCache( CACHE_ANYTHING );
	}

	public function doUpdate() {
		$params = $this->worker;
		$func = array_shift( $params );
		$value = call_user_func_array( $func, $params );

		$toStore = array(
			'v' => $value,
			't' => wfTimestamp( TS_UNIX ),
		);

		$this->getCache()->set( $this->key, $toStore, $this->expiredAge );

		return $value;
	}

	public function get() {
		$value = $this->getCache()->get( $this->key );

		if ( !is_array( $value ) ) {
			if ( $this->onMiss !== 'update' ) {
				$job = CachedStatJob::newJob( $this );
				JobQueueGroup::singleton()->push( $job );

				return null;
			} else {
				return $this->doUpdate();
			}
		}

		if ( $value['t'] + $this->staleAge < wfTimestamp( TS_UNIX ) ) {
			// Useless
			// DeferredUpdates::addUpdate( $this );
			// Use jobqueue instead
			$job = CachedStatJob::newJob( $this );
			JobQueueGroup::singleton()->push( $job );
		}

		return $value['v'];
	}

	public function getKey() {
		return $this->key;
	}
}

class CachedStatJob extends Job {
	public static function newJob( DeferrableUpdate $stat ) {
		return new self( Title::newMainPage(), array( 'obj' => $stat, 'key' => $stat->getKey() ) );
	}

	function __construct( $title, $params = array(), $id = 0 ) {
		parent::__construct( __CLASS__, $title, $params, $id );
		$this->params = $params;
		$this->removeDuplicates = true;
	}

	function run() {
		$this->params['obj']->doUpdate();

		return true;
	}
}
