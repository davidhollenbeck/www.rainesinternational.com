<?php
/**
 * Register Custom User Roles
 */
namespace Ucoast\Raines;

\add_role(
	'consultant',
	__( 'Consultant' ),
	array(
		'read'         => true,  // true allows this capability

	)
);