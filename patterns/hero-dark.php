<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Hero: Dark
 * Slug: kivo/hero-dark
 * Categories: kivo, banner
 * Keywords: hero, homepage, landing, dark, bold
 * Viewport Width: 1400
 * Description: A bold, full-bleed dark hero section using the theme's own Text color as a background, for a striking above-the-fold statement.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"text","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-text-background-color has-background"
	style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"740px"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.06em"}}} -->
		<p class="has-text-align-center has-accent-color has-text-color has-small-font-size"
			style="font-weight:700;letter-spacing:0.06em;text-transform:uppercase">
			<?php echo esc_html__('Now booking for next quarter', 'kivo'); ?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge","textColor":"white"} -->
		<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-huge-font-size">
			<?php echo esc_html__('Bold ideas deserve a bold launch', 'kivo'); ?>
		</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"white","fontSize":"large"} -->
		<p class="has-text-align-center has-white-color has-text-color has-large-font-size">
			<?php echo esc_html__('A high-contrast landing section for agencies and studios that want to make a strong first impression.', 'kivo'); ?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"white","textColor":"text"} -->
			<div class="wp-block-button"><a
					class="wp-block-button__link has-text-color has-background-color has-background wp-element-button"><?php echo esc_html__('Book a Call', 'kivo'); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->