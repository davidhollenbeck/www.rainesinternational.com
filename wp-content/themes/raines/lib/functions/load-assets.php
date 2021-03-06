<?php
/**
 * Asset loader handler.
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */
namespace Ucoast\Raines;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
/**
 * Enqueue Scripts and Styles.
 *
 * @since 1.0.2
 *
 * @return void
 */
function enqueue_assets() {

	wp_enqueue_style( CHILD_TEXT_DOMAIN . '-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700|Roboto:300,400', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( CHILD_TEXT_DOMAIN . '-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css', array(), CHILD_THEME_VERSION );

	wp_enqueue_style( 'dashicons' );

	wp_enqueue_script( CHILD_TEXT_DOMAIN . '-responsive-menu', CHILD_URL . '/assets/js/responsive-menu.js', array( 'jquery' ), CHILD_THEME_VERSION, true );

	wp_enqueue_script( CHILD_TEXT_DOMAIN . '-slider', CHILD_URL . '/assets/js/slider.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_enqueue_script( CHILD_TEXT_DOMAIN . '-slick', CHILD_URL . '/assets/js/slick.min.js', array( 'jquery' ), CHILD_THEME_VERSION, true );

	wp_enqueue_script( CHILD_TEXT_DOMAIN . '-drawer-lib', CHILD_URL . '/assets/js/jquery.multilevelpushmenu.min.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_enqueue_script( CHILD_TEXT_DOMAIN . '-drawer', CHILD_URL . '/assets/js/drawer.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_enqueue_script( 'ajax-pagination',  CHILD_URL . '/assets/js/pagination.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'profile',  CHILD_URL . '/assets/js/profile.js', array( 'jquery' ), '1.0', true );


	global $wp_query;
	wp_localize_script( 'ajax-pagination', 'ajaxpagination', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'query_vars' => json_encode( $wp_query->query )
	));

	$localized_script_args = array(
		'mainMenu' => __( 'Menu', CHILD_TEXT_DOMAIN ),
		'subMenu'  => __( 'Menu', CHILD_TEXT_DOMAIN ),
	);
	wp_localize_script( CHILD_TEXT_DOMAIN . '-responsive-menu', 'rainesL10n', $localized_script_args );
}