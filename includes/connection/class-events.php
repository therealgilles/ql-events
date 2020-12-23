<?php
/**
 * Connection - Events
 *
 * Registers connections to Events
 *
 * @package WPGraphQL\QL_Events\Connection
 * @since   0.0.1
 */

namespace WPGraphQL\QL_Events\Connection;

use WPGraphQL\Types;

/**
 * Class - Events
 */
class Events {
	/**
	 * Filters
	 */
	public static function where_args() {
		$where_args = array(
			'venuesIn'       => array(
				'type'        => array( 'list_of' => 'Int' ),
				'description' => __( 'Filter the connection based on event venue ID', 'ql-events' ),
			),
			'venuesNotIn'    => array(
				'type'        => array( 'list_of' => 'Int' ),
				'description' => __( 'Filter the connection based on event venue ID', 'ql-events' ),
			),
			'startDateQuery' => array(
				'type'        => 'DateQueryInput',
				'description' => __( 'Filter the connection based on event start dates', 'ql-events' ),
			),
			'endDateQuery'   => array(
				'type'        => 'DateQueryInput',
				'description' => __( 'Filter the connection based on event end dates', 'ql-events' ),
			),
		);

		if ( is_callable( '\tribe_is_recurring_event' ) ) {
			$where_args['firstRecurrenceOnly'] = array(
				'type'        => 'Boolean',
				'description' => __( 'Show only the first instance of each recurring event', 'ql-events' ),
			);
		}

		return $where_args;
	}
}
