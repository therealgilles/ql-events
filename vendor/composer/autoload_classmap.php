<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'QL_Events' => $baseDir . '/includes/class-ql-events.php',
    'WPGraphQL\\Extensions\\QL_Events\\Connection\\Attendees' => $baseDir . '/includes/connection/class-attendees.php',
    'WPGraphQL\\Extensions\\QL_Events\\Connection\\Events' => $baseDir . '/includes/connection/class-events.php',
    'WPGraphQL\\Extensions\\QL_Events\\Connection\\Organizers' => $baseDir . '/includes/connection/class-organizers.php',
    'WPGraphQL\\Extensions\\QL_Events\\Connection\\Tickets' => $baseDir . '/includes/connection/class-tickets.php',
    'WPGraphQL\\Extensions\\QL_Events\\Core_Schema_Filters' => $baseDir . '/includes/class-core-schema-filters.php',
    'WPGraphQL\\Extensions\\QL_Events\\Data\\Connection\\Attendee_Connection_Resolver' => $baseDir . '/includes/data/connection/class-attendee-connection-resolver.php',
    'WPGraphQL\\Extensions\\QL_Events\\Data\\Connection\\Event_Connection_Resolver' => $baseDir . '/includes/data/connection/class-event-connection-resolver.php',
    'WPGraphQL\\Extensions\\QL_Events\\Data\\Connection\\Organizer_Connection_Resolver' => $baseDir . '/includes/data/connection/class-organizer-connection-resolver.php',
    'WPGraphQL\\Extensions\\QL_Events\\Data\\Connection\\Ticket_Connection_Resolver' => $baseDir . '/includes/data/connection/class-ticket-connection-resolver.php',
    'WPGraphQL\\Extensions\\QL_Events\\Data\\Factory' => $baseDir . '/includes/data/class-factory.php',
    'WPGraphQL\\Extensions\\QL_Events\\Type\\WPObject\\Attendee' => $baseDir . '/includes/types/object/common/trait-attendee.php',
    'WPGraphQL\\Extensions\\QL_Events\\Type\\WPObject\\Event_Type' => $baseDir . '/includes/types/object/class-event-type.php',
    'WPGraphQL\\Extensions\\QL_Events\\Type\\WPObject\\Order' => $baseDir . '/includes/types/object/common/trait-order.php',
    'WPGraphQL\\Extensions\\QL_Events\\Type\\WPObject\\Organizer_Type' => $baseDir . '/includes/types/object/class-organizer-type.php',
    'WPGraphQL\\Extensions\\QL_Events\\Type\\WPObject\\PayPalAttendee_Type' => $baseDir . '/includes/types/object/class-paypalattendee-type.php',
    'WPGraphQL\\Extensions\\QL_Events\\Type\\WPObject\\PayPalOrder_Type' => $baseDir . '/includes/types/object/class-paypalorder-type.php',
    'WPGraphQL\\Extensions\\QL_Events\\Type\\WPObject\\PayPalTicket_Type' => $baseDir . '/includes/types/object/class-paypalticket-type.php',
    'WPGraphQL\\Extensions\\QL_Events\\Type\\WPObject\\RSVPAttendee_Type' => $baseDir . '/includes/types/object/class-rsvpattendee-type.php',
    'WPGraphQL\\Extensions\\QL_Events\\Type\\WPObject\\RSVPTicket_Type' => $baseDir . '/includes/types/object/class-rsvpticket-type.php',
    'WPGraphQL\\Extensions\\QL_Events\\Type\\WPObject\\Ticket' => $baseDir . '/includes/types/object/common/trait-ticket.php',
    'WPGraphQL\\Extensions\\QL_Events\\Type\\WPObject\\Ticket_Type' => $baseDir . '/includes/types/object/class-ticket-type.php',
    'WPGraphQL\\Extensions\\QL_Events\\Type\\WPObject\\Venue_Type' => $baseDir . '/includes/types/object/class-venue-type.php',
    'WPGraphQL\\Extensions\\QL_Events\\Type\\WPObject\\WooAttendee_Type' => $baseDir . '/includes/types/object/class-wooattendee-type.php',
    'WPGraphQL\\Extensions\\QL_Events\\Type_Registry' => $baseDir . '/includes/class-type-registry.php',
);
