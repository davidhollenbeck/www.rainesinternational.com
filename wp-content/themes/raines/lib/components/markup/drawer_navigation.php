<?php
/**
 *
 * Drawer Navigation Component
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

add_action( 'genesis_site_title', __NAMESPACE__ . '\drawer_navigation__toggle', 1 );


function drawer_navigation__toggle() {
    ?>
		<a href="#" class="drawer-navigation__toggle hidden" id="drawer-navigation__toggle" style="display:inline-block; width:20px;">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14"><defs><style>.a{fill:#333;}</style></defs><path class="a" d="M-6160,14V12h10v2Zm0-6V6h16V8Zm0-6V0h16V2Z" transform="translate(6160)"/></svg>
		</a>
	<?php
}