<?php

/**
 * @group Database
 */
class CachedStatTest extends PHPUnit\Framework\TestCase {

	public static function updater() {
		return 'test';
	}

	public function testDontAllowMiss() {
		$value = 'test';

		$updater = $this->getMock( 'NullUpdater' );
		$updater->expects( self::once() )
			->method( 'calculate' )
			->will( self::returnValue( $value ) );

		$cacher = new CachedStat(
			__METHOD__,
			/*stale*/10,
			/*expiry*/10,
			[ [ $updater, 'calculate' ] ],
			'update'
		);

		$stub = $this->getMock( 'EmptyBagOStuff' );
		$stub->expects( self::once() )
			->method( 'get' );

		$stub->expects( self::once() )
			->method( 'set' );

		$cacher->setCache( $stub );
		$this->assertEquals( $value, $cacher->get() );
	}

	public function testAllowMiss() {
		$updater = $this->getMock( 'NullUpdater' );
		$updater->expects( self::never() )
			->method( 'calculate' );

		$cacher = new CachedStat(
			__METHOD__,
			/*stale*/10,
			/*expiry*/10,
			[ [ $updater, 'calculate' ] ],
			'allow miss'
		);
		$stub = $this->getMock( 'EmptyBagOStuff' );
		$stub->expects( self::once() )
			->method( 'get' );

		$stub->expects( self::never() )
			->method( 'set' );

		$cacher->setCache( $stub );
		$this->assertEquals( null, $cacher->get() );
	}
}

class NullUpdater {
	public function calculate() {
		return 'unreachable code';
	}
}
