<?php
/**
 * Classes for caching stat numbers.
 *
 * @file
 * @author Niklas Laxström
 * @license GPL-2.0-or-later
 */

use MediaWiki\MediaWikiServices;

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

	/** @var BagOStuff */
	protected $cache;

	/**
	 * @param string $key Unique key for these values.
	 * @param int $staleAge Trigger background refresh job if values are older than this.
	 * @param int $expiredAge Do not use values older than this.
	 * @param array $worker Array with method and parameters.
	 * @param string $onMiss What to do on cache miss. 'update' or 'allow miss'.
	 */
	public function __construct( $key, $staleAge, $expiredAge, $worker, $onMiss = 'update' ) {
		$this->key = $key;
		$this->staleAge = $staleAge;
		$this->expiredAge = $expiredAge;
		$this->worker = $worker;
		$this->onMiss = $onMiss;

		$this->cache = ObjectCache::getInstance( CACHE_ANYTHING );
	}

	/** @internal For testing only */
	public function setCache( BagOStuff $cache ) {
		$this->cache = $cache;
	}

	public function doUpdate() {
		$params = $this->worker;
		$func = array_shift( $params );
		$value = call_user_func_array( $func, $params );

		$toStore = [
			'v' => $value,
			't' => wfTimestamp( TS_UNIX ),
		];

		$this->cache->set( $this->getKey(), $toStore, $this->expiredAge );

		return $value;
	}

	public function get() {
		$value = $this->cache->get( $this->getKey() );

		if ( !is_array( $value ) ) {
			if ( $this->onMiss !== 'update' ) {
				MediaWikiServices::getInstance()->getJobQueueGroup()->push( $this->makeJob() );

				return null;
			} else {
				return $this->doUpdate();
			}
		}

		if ( $value['t'] + $this->staleAge < wfTimestamp( TS_UNIX ) ) {
			MediaWikiServices::getInstance()->getJobQueueGroup()->push( $this->makeJob() );
		}

		return $value['v'];
	}

	private function getKey(): string {
		return $this->cache->makeKey( __CLASS__, $this->key );
	}

	private function makeJob(): CachedStatJob {
		return CachedStatJob::newFromSpec(
			[
				'class' => self::class,
				'args' => [
					$this->key,
					$this->staleAge,
					$this->expiredAge,
					$this->worker,
					$this->onMiss,
				],
				'calls' => [ 'doUpdate' => [] ],
			]
		);
	}
}
