<?php
/**
 * Sidebar (widgetized areas) HTML markup structure
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */
namespace Ucoast\Raines;

/**
 * Unregister sidebar callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */

function register_sidebars() {
	genesis_register_sidebar( array(
		'id'            => 'raines-home',
		'name'          => __( 'After Post', 'raines' ),
		'description'   => __( 'This is a widget area that can be placed after the post', 'raines' ),
	) );
}

