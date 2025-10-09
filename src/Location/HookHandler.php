<?php
declare( strict_types = 1 );

namespace Translatewiki\Location;

use MediaWiki\Hook\ParserFirstCallInitHook;
use MediaWiki\Title\MalformedTitleException;
use MediaWiki\Title\TitleParser;
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
	private TitleParser $titleParser;

	public function __construct(
		IConnectionProvider $connectionProvider,
		TitleParser $titleParser
	) {
		$this->connectionProvider = $connectionProvider;
		$this->titleParser = $titleParser;
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

	public function getLocations( Parser $parser, ...$args ) {
		$query = $this->connectionProvider->getReplicaDatabase()->newSelectQueryBuilder()
			->select( 'pp_value' )
			->from( 'page_props' )
			->where( [ 'pp_propname' => self::PAGE_PROP_NAME ] );

		$categoryDatabaseName = $this->getCategoryFilter( $args );
		if ( $categoryDatabaseName !== null ) {
			$query
				->join( 'page', null, 'page_id=pp_page' )
				->join( 'categorylinks', null, [ 'cl_from=page_id' ] )
				->join( 'linktarget', null, [ 'lt_title' => $categoryDatabaseName ] );
		}

		$locations = $query->caller( __METHOD__ )->fetchFieldValues();
		return implode( ';', $locations );
	}

	/** @param string[] $args */
	private function getCategoryFilter( array $args ): ?string {
		foreach ( $args as $arg ) {
			if ( trim( $arg ) === '' ) {
				continue;
			}

			[ $key, $value ] = array_map( 'trim', explode( '=', $arg, 2 ) );

			if ( $key !== 'category' ) {
				continue;
			}

			try {
				return $this->titleParser->parseTitle( $value, NS_CATEGORY )->getDBkey();
			} catch ( MalformedTitleException $e ) {
				// If we just ignored invalid category param, we would not filter anything.
				// By returning the original value, we add a query filter that will result
				// in no rows found.
				return $arg;
			}
		}
		return null;
	}
}
