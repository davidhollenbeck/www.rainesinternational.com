<?php
/**
 *
 * Ajax functionality
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

add_action( 'wp_ajax_nopriv_team_pagination', 'ajax_team' );
add_action( 'wp_ajax_team_pagination', 'ajax_team' );

function ajax_team() {
	if ( isset($_REQUEST) ) {

		$url     = wp_get_referer();
		$post_id = url_to_postid( $url );
		$page = $_REQUEST['page'];
		if ( get_field('team_member' , $post_id ) ) {
			$html = Ucoast\Raines\recent_articles_ajax( get_field('team_member' , $post_id ), 4, $page );
		}
		echo $html;
	}
	die();
}

add_action( 'wp_ajax_nopriv_placements_pagination', 'ajax_placements' );
add_action( 'wp_ajax_placements_pagination', 'ajax_placements' );

function ajax_placements() {
	if ( isset($_REQUEST) ) {

		$url     = wp_get_referer();
		$post_id = url_to_postid( $url );
		$page = $_REQUEST['page'];
		$ctrack = $_REQUEST['ctrack'];
		echo Ucoast\Raines\listings( $page, true, 'placement', $ctrack );
	}
	die();
}

add_action( 'wp_ajax_nopriv_opportunities_pagination', 'ajax_opportunities' );
add_action( 'wp_ajax_opportunities_pagination', 'ajax_opportunities' );

function ajax_opportunities() {
	if ( isset($_REQUEST) ) {

		$url     = wp_get_referer();
		$post_id = url_to_postid( $url );
		$page = $_REQUEST['page'];
		echo Ucoast\Raines\listings( $page, true, 'opportunity' );
	}
	die();
}

add_action( 'wp_ajax_nopriv_category_pagination', 'ajax_category' );
add_action( 'wp_ajax_category_pagination', 'ajax_category' );

function ajax_category() {
	if ( isset($_REQUEST) ) {

		$url     = wp_get_referer();
		$post_id = url_to_postid( $url );
		$page = $_REQUEST['page'];
		echo Ucoast\Raines\load_category_articles( get_the_category_by_ID( $post_id ), $page, true );
	}
	die();
}

add_action( 'wp_ajax_nopriv_profiles_pagination', 'ajax_profiles_interviews' );
add_action( 'wp_ajax_profiles_pagination', 'ajax_profiles_interviews' );

function ajax_profiles_interviews() {
	if ( isset($_REQUEST) ) {
		$url     = wp_get_referer();
		$post_id = url_to_postid( $url );
		$page = $_REQUEST['page'];
		echo Ucoast\Raines\load_profiles_interviews( $page, true );
	}
	die();
}