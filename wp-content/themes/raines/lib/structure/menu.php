<?php
/**
 * Menu HTML markup structure
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */
namespace Ucoast\Raines;

/**
 * Unregister menu callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_menu_callbacks() {
	remove_action( 'genesis_after_header', 'genesis_do_subnav' );
	remove_action( 'genesis_after_header', 'genesis_do_nav');
}

// Reposition the secondary navigation menu
add_action( 'genesis_footer', 'genesis_do_subnav', 5 );

add_action('genesis_header_right', 'genesis_do_nav');

add_filter( 'wp_nav_menu_args', __NAMESPACE__ . '\setup_secondary_menu_args' );
/**
 * Reduce the secondary navigation menu to one level depth.
 *
 * @since 1.0.0
 *
 * @param array $args
 *
 * @return array
 */
function setup_secondary_menu_args( array $args ) {

	if ( 'secondary' != $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 1;

	return $args;
}

/**
 * Register Footer functions
 *
 * @since 1.0.0
 *
 * @param
 *
 * @return
 */

function register_additional_menus() {

	register_nav_menu( 'footer-menu-1' ,__( 'Footer Menu 1' ));
	register_nav_menu( 'footer-menu-2' ,__( 'Footer Menu 2' ));

}

add_action( 'init', __NAMESPACE__ . '\register_additional_menus' );


function footer_nav_1() {
	wp_nav_menu( array( 'theme_location' => 'footer-menu-1', 'container_class' => 'genesis-nav-menu' ) );
}

function footer_nav_2() {
	wp_nav_menu( array( 'theme_location' => 'footer-menu-2', 'container_class' => 'genesis-nav-menu' ) );
}
