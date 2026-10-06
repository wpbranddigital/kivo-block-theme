<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Hero: Primary with CTA
 * Slug: kivo/hero-primary
 * Categories: kivo, banner
 * Keywords: hero, homepage, landing, cta, headline
 * Viewport Width: 1400
 * Description: A centered hero with an eyebrow badge, large headline, supporting paragraph, a primary button and a secondary text link.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"
	style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"740px"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:paragraph {"align":"center","className":"kivo-badge"} -->
		<p class="has-text-align-center kivo-badge">
			<?php echo esc_html__('Lorem ipsum dolor sit amet consectetur', 'kivo'); ?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
		<h1 class="wp-block-heading has-text-align-center has-huge-font-size">
			<?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'kivo'); ?>
		</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"large"} -->
		<p class="has-text-align-center has-muted-color has-text-color has-large-font-size">
			<?php echo esc_html__('Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'kivo'); ?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a
					class="wp-block-button__link wp-element-button"><?php echo esc_html__('Lorem Ipsum', 'kivo'); ?></a>
			</div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a
					class="wp-block-button__link wp-element-button"><?php echo esc_html__('Dolor Sit Amet', 'kivo'); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->