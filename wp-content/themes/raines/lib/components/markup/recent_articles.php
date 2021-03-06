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

function recent_articles($group, $type = 'default', $posts_per_page='4') {

	if ( $type == 'default' || $type == 'category' ) {
		$args = array(
			'cat' => $group['category'],
			'posts_per_page' => $group['posts_per_page']
		);
	}

	else if ( $type == 'team-member' ) {
		$args = array(
			'post__in'       => $group['articles'],
			'posts_per_page' => $posts_per_page
		);
	}

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
		} else if ( $group['layout'] == "row" || $type == 'team-member' || $type == 'category' ) {
			if ( $type == 'default') {
				echo '<div class="row row--padding recent-articles recent-articles--team-member">
				<h3 class="recent-articles__post-title">Read More <span style="font-weight:700;">' . get_cat_name($group["category"]) . '</span> Articles</h3>
				<ul>';
			}

			elseif ( $type == 'team-member') {
				echo '<div class="row row--padding recent-articles recent-articles--row recent-articles--team-member">
				<h3 class="recent-articles__post-title" style="padding:.5em;">Articles by ' . $group["first_name"] . '</h3>
				<ul>';
			}

			elseif ( $type == 'category' ) {
				echo '<div class="row row--padding recent-articles recent-articles--row recent-articles--category">
				<h3 class="recent-articles__post-title" style="padding:.5em;">Articles about ' . $group['headline'] . '</h3>
				<ul>';
			}

			$i = 0;
			while ( $the_query->have_posts() ) {
				$the_query->the_post();

				if ( $group['columns'] == '3' ) {
					if ( $i == 0 ) {
						$class = 'first one-third';
					}

					else if ($i %3 == 0) {
						$class = 'first one-third';
					}

					else {
						$class = 'one-third';
					}
				}

				else if ( $group['columns'] == '4' ) {
					if ( $i == 0 ) {
						$class = 'first one-fourth';
					}

					else if ($i %4 == 0) {
						$class = 'first one-fourth';
					}

					else {
						$class = 'one-fourth';
					}
				}

				echo
				'<a href="' . get_the_permalink() . '" class="' . $class . '">
					<img src="' . wp_get_attachment_image_src( get_post_thumbnail_id(), "article-list-image" )[0] . '"/>
					<h3 class="recent-articles__post-title">' . get_the_title() . '</h3>
					<p class="recent-articles__post-excerpt">' . get_the_excerpt() .'</p>
				</a>';
				$i++;
			}

			if ( $type == 'team-member' && $the_query->found_posts > 4) {
				echo '</ul><div class="readmore-section"><a class="button button-primary recent-articles__ajax" id="team_paginate" href="#">See More Articles</a><div class="mid-separator"></div></div></div>';
			}

			else if ( $type == 'category' && $the_query->found_posts > 4) {
				echo '</ul><div class="readmore-section"><a class="button button-primary recent-articles__ajax" id="category_paginate" href="#">See More Articles</a><div class="mid-separator"></div></div></div>';
			}

			else {
				echo '</ul></div>';
			}
		}
		/* Restore original Post Data */
		wp_reset_postdata();
	} else {
		// no posts found
	}
}

function recent_articles_ajax($group, $posts_per_page='4', $page='1') {

	$args = array(
		'post__in'       => $group['articles'],
		'posts_per_page' => 4,
		'paged'          => $page
	);


	// The Query
	$the_query = new \WP_Query( $args );

	$html='';

	// The Loop
	if ( $the_query->have_posts() ) {

		$i = 0;
		while ( $the_query->have_posts() ) {
			$the_query->the_post();

			if ( $group['columns'] == '3' ) {
				if ( $i == 0 ) {
					$class = 'first one-third';
				}

				else if ($i %3 == 0) {
					$class = 'first one-third';
				}

				else {
					$class = 'one-third';
				}
			}

			else if ( $group['columns'] == '4' ) {
				if ( $i == 0 ) {
					$class = 'first one-fourth';
				}

				else if ($i %4 == 0) {
					$class = 'first one-fourth';
				}

				else {
					$class = 'one-fourth';
				}
			}


			$html .=
				'<a href="' . get_the_permalink() . '" class="' . $class . '">
						<img src="' . wp_get_attachment_image_src( get_post_thumbnail_id(), "article-list-image" )[0] . '"/>
						<h3 class="recent-articles__post-title">' . get_the_title() . '</h3>
						<p class="recent-articles__post-excerpt">' . get_the_excerpt() .'</p>
					</a>';
			$i++;

		}

		/* Restore original Post Data */
		wp_reset_postdata();
	} else {
		// no posts found
	}

	return $html;
}