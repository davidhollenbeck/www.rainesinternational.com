<?php
/**
 *
 * Recent Articles Component
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

function recent_articles($group) {
	$args = array(
		'cat' => $group['category'],
		'posts_per_page' => $group['posts_per_page']
	);
	// The Query
	$the_query = new \WP_Query( $args );

	// The Loop
		if ( $the_query->have_posts() ) {
			if ( $group['layout'] == "sidebar") {
				echo '<div class="recent-articles recent-articles--sidebar"><h2>' . $group['headline'] . '</h2><ul>';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					echo
						'<li>
							<p class="post-date">' . get_the_date() . '</p>
							<h3 class="recent-articles__post-title">' . get_the_title() . '</h3>
							<p class="recent-articles__post-excerpt">' . get_the_excerpt() .'</p>
							<a class="button button--primary" href="' . get_the_permalink() . '">Read More</a>
						</li>';
				}
				echo '</ul></div>';
			} else if ( $group['layout'] == "row") {
				echo '<div class="row row--padding recent-articles recent-articles--row"><h2>' . $group['headline'] . '</h2><ul>';
				$i = 0;
				while ( $the_query->have_posts() ) {
					$the_query->the_post();

					if ( $i == 0 ) {
						$class = ' first';
					}

					else if ($i %3 == 0) {
						$class = ' first';
					}

					else {
						$class = '';
					}
					echo
						'<li class="one-third' . $class . '">
							<img src="' . get_the_post_thumbnail_url() . '"/>
							<h3 class="recent-articles__post-title">' . get_the_title() . '</h3>
							<p class="recent-articles__post-excerpt">' . get_the_excerpt() .'</p>
							<a class="button button--primary" href="' . get_the_permalink() . '">Read More</a>
						</li>';
					$i++;
				}
				echo '</ul></div>';
			}
			/* Restore original Post Data */
			wp_reset_postdata();
		} else {
			// no posts found
		}
}


