<?php
/**
 *
 * Spotlight Component
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

function spotlight($group) {
	if ($group['id'] ) {
		$post = get_post($group['id']);
		if ($post) {
			echo '<div class="recent-articles"><ul>';
			echo
				'<li>
				<p class="post-date">' . date('F j, Y', strtotime($post->post_date)) . '</p>
				<h3 class="recent-articles__post-title">' . $post->post_title . '</h3>
				<p class="recent-articles__post-excerpt">' . $post->post_excerpt .'</p>
				<a class="button button--primary" href="' . get_permalink($post) . '">Read More</a>
			</li>';
			echo '</ul></div>';
		}
	}
}


