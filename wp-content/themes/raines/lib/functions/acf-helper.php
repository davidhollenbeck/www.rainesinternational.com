<?php
/**
 *
 * Helper functions for the ACF plugin.
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

function format_link_target($target) {
	if ($target && $target == 'external') {
		echo 'target="_blank"';
	}
}