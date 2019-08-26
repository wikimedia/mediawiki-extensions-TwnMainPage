<?php

/**
 * @covers CachedStat
 * @group Database
 */
class CachedStatTest extends PHPUnit\Framework\TestCase {
	use PHPUnit4And6Compat;

	public function testDontAllowMiss() {
		$value = 'test';

		$updater = $this->getMock( NullUpdater::class );
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

		$bag = new TwnMainPageTestBagOfStuff( $value );
		$cacher->setCache( $bag );

		$this->assertEquals( $value, $cacher->get() );
		$this->assertEquals( 1, $bag->getterCount() );
		$this->assertEquals( 1, $bag->setterCount() );
	}

	public function testAllowMiss() {
		$updater = $this->getMock( NullUpdater::class );

		$updater->expects( self::never() )
			->method( 'calculate' );

		$cacher = new CachedStat(
			__METHOD__,
			/*stale*/10,
			/*expiry*/10,
			[ [ $updater, 'calculate' ] ],
			'allow miss'
		);

		$bag = new TwnMainPageTestBagOfStuff();
		$cacher->setCache( $bag );

		$this->assertEquals( null, $cacher->get() );
		$this->assertEquals( 1, $bag->getterCount() );
		$this->assertEquals( 0, $bag->setterCount() );
	}
}

class NullUpdater {
	public function calculate() {
		return 'unreachable code';
	}
}

class TwnMainPageTestBagOfStuff extends HashBagOStuff {
	private $getCount = 0;
	private $setCount = 0;
	private $getValue;

	public function __construct( $getValue = null ) {
		$this->getValue = $getValue;
	}

	public function get( $key, $flags = 0 ) {
		++$this->getCount;
		return $this->getValue;
	}

	public function set( $key, $value, $exptime = 0, $flags = 0 ) {
		++$this->setCount;
		return true;
	}

	public function getterCount() {
		return $this->getCount;
	}

	public function setterCount() {
		return $this->setCount;
	}
}
