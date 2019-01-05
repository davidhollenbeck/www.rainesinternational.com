<?php
/**
 *
 * Team Sidebar Slider
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

function team_sidebar_slider() {
	?>
		<div class="sidebar-slider team-slider">
			<?php
			load_team_profiles('sidebar');
			?>
		</div>
	<?php
}