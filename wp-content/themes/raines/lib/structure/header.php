<?php
/**
 * Header HTML markup structure
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */
namespace Ucoast\Raines;

/**
 * Unregister header callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_header_callbacks() {

}

function consultant_menu() {
	?>
		<div class="user-menu">
            <a href="/consultanttrack/">ConsultantTrack</a>
            <a href="/consultanttrack/placements/">Placements</a>
            <a href="/opportunities/">Opportunities</a>
            <a href="#" id="openUserDropdown"><i class="fas fa-user-circle"></i></a>
            <div class="user-menu--dropdown" id="userMenuDropdown">
                <a href="/manage-profile/">Manage Profile</a>
                <a href="/wp-login.php?action=logout">Log Out</a>
            </div>
        </div>
	<?php
}

function ctrack_body_class( $classes ) {

	$classes[] = 'ctrack';
	return $classes;

}

function sp_body_class( $classes ) {

	$classes[] = 'custom-class';
	return $classes;

}