<?php
/**
 * Footer HTML markup structure
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */
namespace Ucoast\Raines;

/**
 * Unregister footer callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_footer_callbacks() {

}

add_filter('genesis_footer_creds_text', __NAMESPACE__ . '\footer_creds_filter');
add_action( 'genesis_footer', __NAMESPACE__ . '\footer_socials', 15 );
add_action( 'genesis_before_footer', __NAMESPACE__ . '\above_footer');

function footer_creds_filter( $creds ) {
	$creds = '[footer_copyright] <a href="https://rainesinternational.com/">Raines International</a>';
	return $creds;
}

function footer_socials() {
	?>
		<p class="footer-social">
			<a href="#" class="footer-social__link"><i class="fab fa-instagram"></i></a>
			<a href="#" class="footer-social__link"><i class="fab fa-twitter"></i></a>
			<a href="#" class="footer-social__link"><i class="fab fa-facebook-f"></i></a>
		</p>
	<?php
}

function above_footer() {
	?>
		<div class="above-footer">
			<div class="row row--padding">
				<div class="mailing-list">
					<h3>Subscribe To Our Mailing List</h3>
					<p>Sign up for email alerts to stay current with the latest research, insights and more from our expert consultants.</p>
                    <?php echo do_shortcode('[contact-form-7 id="10948" title="Mailchimp Subscribe"]'); ?>
				</div>
				<div class="above-footer-right">
					<div class="contact-info">
						<p>(212) 997-1100</p>
						<p>99 Park Avenue, 6th Floor</p>
						<p>New York, NY 10016</p>
					</div>
					<div class="footer-menu-1">
						<?php footer_nav_1(); ?>
					</div>
					<div class="footer-menu-2">
						<?php footer_nav_2(); ?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	<?php
}