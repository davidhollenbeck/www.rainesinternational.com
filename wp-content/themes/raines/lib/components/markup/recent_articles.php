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

function home__load_recent_articles() {
	genesis_widget_area( 'after-post', array(
		'before' => '<div class="after-post widget-area">',
		'after' => '</div>',
	) );
}

