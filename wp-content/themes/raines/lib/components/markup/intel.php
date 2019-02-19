<?php
/**
 *
 * Intel Related Functions
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

function list_categories( $categories = 'default' ) {
	?>
	<div class="link-block-inner">
		<?php
			$args = array(
				'orderby' => 'name',
				'terms'    => array( '4, 6, 7, 15, 434, 23' ),
			
				'taxonomy' => 'category',
				'hide_empty' => 1 ,
				'posts_per_page' => -1,
			);
			$categories = get_categories( $args );
			$i = 0;

			foreach ( $categories as $i=>$category ) {
				$classes = '';

				if ( $i == 0 ) {
					$classes .= 'first ';
				}

				$classes .= 'one-third ';

				render_categories( $category, $i, $classes );

			}
		?>
	</div>
	<?php
}

function render_categories( $category, $index, $classes ) {
	$group = get_field('hero', $category);
	$img = wp_get_attachment_url( $group['image'], 'article-list-image' );
	?>
	<a class="link-block-inner__block link-block-inner__block--<?php echo $index; ?> <?php echo $classes; ?>" href="<?php echo get_category_link( $category->term_id ); ?>">
		<img src="<?php echo $img; ?>" />
		<h4 class="link-block-inner__headline"><?php echo $category->name; ?></h4>
		<p class="link-block-inner__subheadline"><?php echo $group['sub_headline']; ?></p>
	</a>

	<?php
}

function load_category_articles( $category, $page=0, $ajax=false ) {
    $args = array(
        'cat'            => $category->cat_ID,
        'posts_per_page' => 8,
        'paged'          => $page
    );

	// The Query
	$the_query = new \WP_Query( $args );

	if ( !$ajax ) {
		$html = '<div class="row row--padding recent-articles recent-articles--row recent-articles--category"><ul>';
    }

	else {
		$html = '';
    }


	// The Loop
	if ( $the_query->have_posts() ) {

			$i = 0;
			while ( $the_query->have_posts() ) {
				$the_query->the_post();

                if ( $i == 0 ) {
                    $class = 'first one-fourth';
                }

                else if ($i %4 == 0) {
                    $class = 'first one-fourth';
                }

                else {
                    $class = 'one-fourth';
                }

				$html .=
					'<a href="' . get_the_permalink() . '" class="' . $class . '">
					<img src="' . wp_get_attachment_image_src( get_post_thumbnail_id(), "article-list-image" )[0] . '"/>
					<h3 class="recent-articles__post-title">' . get_the_title() . '</h3>
					<p class="recent-articles__post-excerpt">' . get_the_excerpt() .'</p>
				</a>';
				$i++;
			}

			if ( $the_query->found_posts > 8 && !$ajax ) {
			    $html .= '</ul></div><div class="row row--padding" style="display:block;"><div class="readmore-section"><a class="button button-primary recent-articles__ajax" id="category_paginate" href="#">See More Articles</a><div class="mid-separator"></div></div></div>';
				echo $html;
            }

			else if ( !$ajax ) {
				$html .= '</ul></div>';
				echo $html;
            }

			else if ( $ajax ) {
				return $html;
			}


		/* Restore original Post Data */
		wp_reset_postdata();
	} else {
		// no posts found
	}
}