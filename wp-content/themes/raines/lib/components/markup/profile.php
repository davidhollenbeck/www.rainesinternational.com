<?php
/**
 *
 * Profile
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;


add_filter('wppb_send_credentials_checkbox_logic', 'wppbc_send_credentials_checkbox', 10, 2);
function wppbc_send_credentials_checkbox($requestdata, $form){
	return '';
}