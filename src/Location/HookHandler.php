<?php
declare( strict_types = 1 );

namespace Translatewiki\Location;

use MediaWiki\Hook\ParserFirstCallInitHook;
use Parser;
use Wikimedia\Rdbms\IConnectionProvider;

/**
 * Parser functions to store and retrieve locations.
 * @author Niklas Laxström
 * @license GPL-2.0-or-later
 */
class HookHandler implements ParserFirstCallInitHook {
	private const PAGE_PROP_NAME = 'twncoords';
	private IConnectionProvider $connectionProvider;

	public function __construct( IConnectionProvider $connectionProvider ) {
		$this->connectionProvider = $connectionProvider;
	}

	public function onParserFirstCallInit( $parser ) {
		$parser->setFunctionHook( 'twn_set_location', [ $this, 'setLocation' ] );
		$parser->setFunctionHook( 'twn_get_locations', [ $this, 'getLocations' ] );
	}

	public function setLocation( Parser $parser, $param1 = '' ) {
		if ( trim( $param1 ) !== '' ) {
			$parser->getOutput()->setPageProperty( self::PAGE_PROP_NAME, $param1 );
		}
		return '';
	}

	public function getLocations( Parser $parser ) {
		$locations = $this->connectionProvider->getReplicaDatabase()->newSelectQueryBuilder()
			->select( 'pp_value' )
			->from( 'page_props' )
			->where( [ 'pp_propname' => self::PAGE_PROP_NAME ] )
			->caller( __METHOD__ )
			->fetchFieldValues();

		return implode( ';', $locations );
	}
}
