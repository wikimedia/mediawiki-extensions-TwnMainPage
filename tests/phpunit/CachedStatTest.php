<?php
declare( strict_types = 1 );

use MediaWiki\JobQueue\Exceptions\JobQueueReadOnlyError;

/** @covers CachedStat */
class CachedStatTest extends MediaWikiIntegrationTestCase {
	// TODO: Could be an unit test if ObjectCache is injected
	public function testDontAllowMiss() {
		$value = 'test';

		$updater = $this->createMock( NullUpdater::class );
		$updater->expects( self::once() )
			->method( 'calculate' )
			->willReturn( $value );

		$cacher = new CachedStat(
			__METHOD__,
			/*stale*/10,
			/*expiry*/10,
			[ [ $updater, 'calculate' ] ],
			'update'
		);

		$stub = $this->createMock( EmptyBagOStuff::class );
		$stub->expects( self::once() )->method( 'get' );
		$stub->expects( self::once() )->method( 'set' );
		$stub->method( 'makeKey' )->willReturn( 'just-a-key' );

		$cacher->setCache( $stub );
		$this->assertEquals( $value, $cacher->get() );
	}

	public function testAllowMiss() {
		$updater = $this->createMock( NullUpdater::class );
		$updater->expects( self::never() )
			->method( 'calculate' );

		$cacher = new CachedStat(
			__METHOD__,
			/*stale*/10,
			/*expiry*/10,
			[ [ $updater, 'calculate' ] ],
			'allow miss'
		);

		$stub = $this->createMock( EmptyBagOStuff::class );
		$stub->expects( self::once() )->method( 'get' );
		$stub->expects( self::never() )->method( 'set' );
		$stub->method( 'makeKey' )->willReturn( 'just-a-key' );

		$cacher->setCache( $stub );
		$this->assertNull( $cacher->get() );
	}

	public function testReadOnlyQueueAllowMiss() {
		$jobQueueGroup = $this->createMock( JobQueueGroup::class );
		$jobQueueGroup->expects( self::once() )
			->method( 'push' )
			->willThrowException( new JobQueueReadOnlyError( 'Server maintenance in progress' ) );
		$this->setService( 'JobQueueGroup', $jobQueueGroup );

		$updater = $this->createMock( NullUpdater::class );
		$updater->expects( self::never() )
			->method( 'calculate' );

		$cacher = new CachedStat(
			__METHOD__,
			/*stale*/10,
			/*expiry*/10,
			[ [ $updater, 'calculate' ] ],
			'allow miss'
		);

		$stub = $this->createMock( EmptyBagOStuff::class );
		$stub->expects( self::once() )->method( 'get' );
		$stub->expects( self::never() )->method( 'set' );
		$stub->method( 'makeKey' )->willReturn( 'just-a-key' );

		$cacher->setCache( $stub );
		$this->assertNull( $cacher->get() );
	}

	public function testReadOnlyQueueStaleData() {
		$jobQueueGroup = $this->createMock( JobQueueGroup::class );
		$jobQueueGroup->expects( self::once() )
			->method( 'push' )
			->willThrowException( new JobQueueReadOnlyError( 'Server maintenance in progress' ) );
		$this->setService( 'JobQueueGroup', $jobQueueGroup );

		$updater = $this->createMock( NullUpdater::class );
		$updater->expects( self::never() )
			->method( 'calculate' );

		$cacher = new CachedStat(
			__METHOD__,
			/*stale*/10,
			/*expiry*/100,
			[ [ $updater, 'calculate' ] ],
			'update'
		);

		$stub = $this->createMock( EmptyBagOStuff::class );
		$stub->expects( self::once() )
			->method( 'get' )
			->willReturn( [
				'v' => 'stale-value',
				't' => wfTimestamp( TS_UNIX ) - 20,
			] );
		$stub->expects( self::never() )->method( 'set' );
		$stub->method( 'makeKey' )->willReturn( 'just-a-key' );

		$cacher->setCache( $stub );
		$this->assertSame( 'stale-value', $cacher->get() );
	}
}

// phpcs:ignore Generic.Files.OneObjectStructurePerFile.MultipleFound
class NullUpdater {
	public function calculate() {
		return 'unreachable code';
	}
}
