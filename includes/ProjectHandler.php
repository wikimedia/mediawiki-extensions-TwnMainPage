<?php
/**
 * Helper for project handling.
 *
 * @file
 * @author Niklas Laxström
 * @license GPL-2.0-or-later
 */

class ProjectHandler {
	/**
	 * @return MessageGroup[]
	 */
	public function getProjects() {
		$projects = [];

		$cache = ObjectCache::getInstance( CACHE_ANYTHING );
		$cacheKey = $cache->makeKey( __METHOD__ );
		$ids = $cache->get( $cacheKey );
		if ( is_array( $ids ) ) {
			$projects = array_map( 'MessageGroups::getGroup', $ids );
			$projects = array_filter( $projects );
			return $projects;
		}

		// Not cached, find them
		$groups = MessageGroups::getGroupStructure();

		foreach ( $groups as $mixed ) {
			if ( is_array( $mixed ) ) {
				$group = array_shift( $mixed );
			} else {
				$group = $mixed;
			}

			if ( $group->getIcon() !== null ) {
				$projects[$group->getId()] = $group;
			}
		}

		$cache->set( $cacheKey, array_keys( $projects ), 60 * 60 * 24 );
		return $projects;
	}

	/**
	 * Sort the projects by to be determined algorithm. Like most sorting
	 * functions in PHP this modifies passed list in place.
	 * @param MessageGroup[] &$groups
	 * @param string $language Language code.
	 * @param array $stats Message group stats.
	 */
	public function sortByPriority( &$groups, $language, array $stats ) {
		foreach ( $groups as $index => $g ) {
			$supported = $g->getTranslatableLanguages();
			if ( is_array( $supported ) && !isset( $supported[$language] ) ) {
				unset( $groups[$index] );
			}
		}

		usort( $groups, static function ( MessageGroup $a, MessageGroup $b ) use ( $stats ) {
			$aStats = $stats[$a->getId()];
			$bStats = $stats[$b->getId()];

			$aVal = $aStats[MessageGroupStats::PROOFREAD];
			$bVal = $bStats[MessageGroupStats::PROOFREAD];

			if ( $aVal === $bVal ) {
				return 0;
			} else {
				return ( $aVal > $bVal ) ? -1 : 1;
			}
		} );
	}
}
