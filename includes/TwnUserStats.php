<?php
/**
 * Code for getting user rankings.
 *
 * @file
 * @author Niklas Laxström
 * @license GPL2+
 */

class TwnUserStats {
	public static function getTranslationRankings( $language, $days = 7 ) {
		global $wgTranslateMessageNamespaces;

		$now = wfTimestamp( TS_UNIX );
		$weekago = $now - $days * 24 * 60 * 60;
		$ret = [];

		$dbr = wfGetDB( DB_REPLICA );

		$tables = [
			'recentchanges',
			'actor',
		];

		$fields = [
			'user_id' => 'actor_user',
			'user_name' => 'actor_name',
			'rc_timestamp',
			'rc_id',
		];

		$conds = [
			'rc_namespace' => $wgTranslateMessageNamespaces,
			'rc_bot' => 0,
		];

		if ( $language !== '' ) {
			$conds[] = 'rc_title' . $dbr->buildLike( $dbr->anyString(), "/$language" );
		}

		$options = [
			'ORDER BY' => 'rc_id DESC',
			'LIMIT' => 500
		];

		$joins = [ 'actor' => [ 'JOIN', 'rc_actor=actor_id' ] ];

		$cutoff = false;

		while ( true ) {
			$myconds = $conds;

			if ( $cutoff ) {
				$myconds[] = "rc_id < $cutoff";
			}

			$res = $dbr->select( $tables, $fields, $myconds, __METHOD__, $options, $joins );

			// Avoid infinite loop if there are no rows
			if ( $res->numRows() === 0 ) {
				break;
			}

			foreach ( $res as $row ) {
				if ( wfTimestamp( TS_UNIX, $row->rc_timestamp ) < $weekago ) {
					break 2;
				}

				if ( !isset( $ret[$row->user_name] ) ) {
					$ret[$row->user_name] = 0;
				}
				$ret[$row->user_name]++;
				$cutoff = $row->rc_id;
			}
		}

		arsort( $ret );

		return $ret;
	}

	public static function getProofreadRankings( $language, $days = 7 ) {
		global $wgTranslateMessageNamespaces;

		$now = wfTimestamp( TS_UNIX );
		$weekago = $now - $days * 24 * 60 * 60;
		$ret = [];

		$dbr = wfGetDB( DB_REPLICA );

		$tables = [
			'logging',
			'actor',
		];

		$fields = [
			'user_name' => 'actor_name',
			'actions' => 'count(log_id)'
		];

		$conds = [
			'log_namespace' => $wgTranslateMessageNamespaces,
			'log_type' => 'translationreview',
			'log_action' => 'message',
			'log_timestamp >= ' . $dbr->timestamp( $weekago ),
		];

		if ( $language !== '' ) {
			$conds[] = 'log_title' . $dbr->buildLike( $dbr->anyString(), "/$language" );
		}

		$options = [
			'GROUP BY' => 'user_name',
		];

		$joins = [ 'actor' => [ 'JOIN', 'log_actor=actor_id' ] ];

		$res = $dbr->select( $tables, $fields, $conds, __METHOD__, $options, $joins );
		foreach ( $res as $row ) {
			$ret[$row->user_name] = $row->actions;
		}

		arsort( $ret );

		return $ret;
	}
}
