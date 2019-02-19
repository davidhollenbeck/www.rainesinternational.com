<?php
/**
 *
 * Generic Post Template
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

add_action('genesis_before_loop', __NAMESPACE__ . '\load_single_post', 1);
remove_action('genesis_loop', 'genesis_do_loop');
add_action('post_content_reformat', 'genesis_do_loop');
add_action( 'genesis_meta', __NAMESPACE__ . '\og_meta_tag' );
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );


function load_single_post() {
	hero( get_field('post_hero'), 'article' );
	load_social_share();
	?>
		<div class="row row--padding row--single-post-content">
			<div class="first three-fourths">
				<?php do_action('post_content_reformat'); ?>
			</div>
			<div class="one-fourth">
				<?php recent_articles( get_field('recent_articles', 5) ); ?>
			</div>
			<div class="clearfix"></div>
		</div>
	<?php
	intel_footer_cta();
}

function og_meta_tag() {
	?>
	<meta property="og:url" content="<?php echo get_permalink(); ?>"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="Raines International"/>
	<meta property="og:description" content="<?php echo get_the_excerpt(); ?>"/>
	<meta property="og:image" content="<?php echo  $img = get_the_post_thumbnail_url( null, 'hero-link-image' ); ?>"/>
	<?php
}

function load_social_share() {
	?>
	<div class="social-share row row--padding">
		<!-- Load Facebook SDK for JavaScript -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
	            var js, fjs = d.getElementsByTagName(s)[0];
	            if (d.getElementById(id)) return;
	            js = d.createElement(s); js.id = id;
	            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
	            fjs.parentNode.insertBefore(js, fjs);
	        }(document, 'script', 'facebook-jssdk'));</script>

		<!-- Your share button code -->
		<div class="fb-share-button" data-href="<?php echo get_permalink(); ?>" data-layout="button">
		</div>
		<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div>
	<?php
}

genesis();