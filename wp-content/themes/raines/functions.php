<?php
/**
 * Developer's Theme
 *
 * @package     Ucoast\Raines
 * @since       1.0.2
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */
namespace Ucoast\Raines;

include_once( 'lib/init.php' );

include_once( 'lib/functions/autoload.php' );

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Raines Theme Options',
		'menu_title'	=> 'Raines Theme Options',
		'menu_slug' 	=> 'raines-theme-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Solutions',
		'menu_title'	=> 'Solutions Link Block Content',
		'parent_slug'	=> 'raines-theme-options',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'raines-theme-options',
	));

}



