<?php
/**
 *
 * Placements Functions
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

function listings( $page='0', $ajax=false, $type='placement', $ctrack='all' ) {

	if( $ctrack == 'all' ) {

		$args = array(
			'posts_per_page'   => 8,
			'order'            => 'ASC',
			'post_type'        => $type,
			'paged'            => $page
		);
	}

	elseif ( $ctrack == 'ct') {
		$args = array(
			'posts_per_page'   => 8,
			'order'            => 'ASC',
			'post_type'        => $type,
			'paged'            => $page,
			'meta_key'         => 'consultant_track_post_display',
			'meta_value'       => 'ct'
		);
	}

	elseif ( $ctrack == 'main_only') {
		$args = array(
			'posts_per_page'   => 8,
			'order'            => 'ASC',
			'post_type'        => $type,
			'paged'            => $page,
			'meta_key'         => 'consultant_track_post_display',
			'meta_value'       => 'main_only'
		);
	}

	$the_query = new \WP_Query( $args );
	if ( ! $ajax ) {
		$html = '<div id="listings">';
	}

	else {
	    $html = '';
    }

	if ( $the_query->have_posts() ) {
		$i = 0;

		while ( $the_query->have_posts() ):
			$the_query->the_post();

			$group = get_field( 'placements', get_the_id() );
			$index = ( $page * 8) + $the_query->current_post;

			         $html .= '<div class="placement-item">';
            $html .=	'<h4>' . $group['title'] . '</h4>';
			$html .=	'<h6>' . $group['company'] . '</h6>';
			$html .=	'<a href="' . get_the_permalink() . '" class="view-listing-details" data-placement="' . $index . '">View Details</a>';
			$html .=	'<div class="listing-content" id="listing-content-' . $index . '">';
			$html .=	apply_filters( 'the_content', get_post_field('post_content', get_the_id() ) );

			if ( $type == 'opportunity' ) {
				$html .= '<a href="#" class="button button--primary" data-opportunity="' . get_the_id() . '">Express Interest</a>';
			}

			$html .=	'</div>';
            $html .=    '</div>';

			$i++;
		endwhile;
		/* Restore original Post Data */
		wp_reset_postdata();
	} else {
		// no posts found
	}

	if ( ! $ajax ) {
		if (  $the_query->max_num_pages > 1 && $type == 'placement' ) {
			$html .= '</div><div class="readmore-section"><a class="button button-primary placements__ajax" id="placements_paginate" href="#">See More Placements</a><div class="mid-separator"></div></div>';
        }

		elseif (  $the_query->max_num_pages > 1 && $type == 'opportunity' ) {
			$html .= '</div><div class="readmore-section"><a class="button button-primary placements__ajax" id="opportunities_paginate" href="#">See More Opportunities</a><div class="mid-separator"></div></div>';
		}

		echo $html;
    }

	else {

	    return $html;
    }
}

