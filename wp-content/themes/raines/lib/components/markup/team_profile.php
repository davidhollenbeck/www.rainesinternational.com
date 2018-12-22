<?php
/**
 *
 * Team Profile
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

function team_profile__content($group) {
	$content = $group['content'];
	foreach ( $content as $i=>$block) {
		?>
			<div class="content-block content-block--team-member">
				<h3><?php echo $block['headline']; ?></h3>
				<?php echo $block['copy']; ?>
			</div>
		<?php
	}
}

function team_profile__sidebar( $id ) {

	$categories = wp_get_post_categories( $id );
	?>
		<div class="team-profile-expertise">
            <h3>Areas of Focus</h3>
			<ul>
				<?php
					foreach($categories as $category) {
					    $cat_obj = get_category($category);
					    $cat_parent = get_category($cat_obj->category_parent);
						?>
							<li><a href="/<?php echo $cat_parent->slug . '/' . $cat_obj->slug; ?>"><?php echo get_category($category)->name; ?></a></li>
						<?php
					}
				?>
			</ul>
		</div>
	<?php
}