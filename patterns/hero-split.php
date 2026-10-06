<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Hero: Split with Image
 * Slug: kivo/hero-split
 * Categories: kivo, banner
 * Keywords: hero, homepage, landing, split, image
 * Viewport Width: 1400
 * Description: A two-column hero with headline, paragraph and buttons on the left, and a decorative visual panel on the right in place of a photo.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"
	style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">

	<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large","top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

			<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
			<h1 class="wp-block-heading has-xx-large-font-size">
				<?php echo esc_html__('Sell your course, product or service with confidence', 'kivo'); ?>
			</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted","fontSize":"large","style":{"spacing":{"margin":{"top":"1rem","bottom":"1.5rem"}}}} -->
			<p class="has-muted-color has-text-color has-large-font-size" style="margin-top:1rem;margin-bottom:1.5rem">
				<?php echo esc_html__('A focused homepage layout that puts your offer front and center — built from block patterns you can rearrange yourself in the Site Editor.', 'kivo'); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a
						class="wp-block-button__link wp-element-button"><?php echo esc_html__('Start Free Trial', 'kivo'); ?></a>
				</div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a
						class="wp-block-button__link wp-element-button"><?php echo esc_html__('Watch Demo', 'kivo'); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:group {"gradient":"primary-to-secondary","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"1.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"vertical"}} -->
			<div class="wp-block-group has-primary-to-secondary-gradient-background has-background"
				style="border-radius:1.5rem;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--large)">
				<!-- wp:paragraph {"align":"center","textColor":"white","style":{"typography":{"fontSize":"3rem","lineHeight":"1"}}} -->
				<p class="has-text-align-center has-white-color has-text-color" style="font-size:3rem;line-height:1">
					&#9670;</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","textColor":"white","fontSize":"small"} -->
				<p class="has-text-align-center has-white-color has-text-color has-small-font-size">
					<?php echo esc_html__('Your product screenshot or brand visual goes here', 'kivo'); ?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->