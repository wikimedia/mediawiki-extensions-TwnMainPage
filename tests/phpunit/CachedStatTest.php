<?php

/**
 * @group Database
 */
class CachedStatTest extends PHPUnit_Framework_TestCase {

	public static function updater() {
		return 'test';
	}

	public function testDontAllowMiss() {
		$value = 'test';

		$updater = $this->getMock( 'NullUpdater' );
		$updater->expects( $this->once() )
			->method( 'calculate' )
			->will( $this->returnValue( $value ) );

		$cacher = new CachedStat(
			__METHOD__,
			/*stale*/10,
			/*expiry*/10,
			array( array( $updater, 'calculate' ) ),
			'update'
		);

		$stub = $this->getMock( 'BagOStuff' );
		$stub->expects( $this->once() )
			->method( 'get' );

		$stub->expects( $this->once() )
			->method( 'set' );

		$cacher->setCache( $stub );
		$this->assertEquals( $value, $cacher->get() );
	}

	public function testAllowMiss() {
		$updater = $this->getMock( 'NullUpdater' );
		$updater->expects( $this->never() )
			->method( 'calculate' );

		$cacher = new CachedStat(
			__METHOD__,
			/*stale*/10,
			/*expiry*/10,
			array( array( $updater, 'calculate' ) ),
			'allow miss'
		);
		$stub = $this->getMock( 'BagOStuff' );
		$stub->expects( $this->once() )
			->method( 'get' );

		$stub->expects( $this->never() )
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
