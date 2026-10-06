<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Business: Services Grid
 * Slug: kivo/business-services-grid
 * Categories: kivo, services
 * Keywords: services, business, cards, offerings
 * Viewport Width: 1400
 * Description: A heading followed by three bordered service cards, each with a symbol, title, description and a text link.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"
	style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__('Lorem ipsum dolor', 'kivo'); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.5rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card"
				style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontSize":"1.75rem"}}} -->
				<p class="has-primary-color has-text-color" style="font-size:1.75rem">&#9670;</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading"><?php echo esc_html__('Lorem Ipsum', 'kivo'); ?></h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted"} -->
				<p class="has-muted-color has-text-color">
					<?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.', 'kivo'); ?>
				</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><a href="#"><?php echo esc_html__('Lorem ipsum &rarr;', 'kivo'); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.5rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card"
				style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"textColor":"secondary","style":{"typography":{"fontSize":"1.75rem"}}} -->
				<p class="has-secondary-color has-text-color" style="font-size:1.75rem">&#9679;</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading"><?php echo esc_html__('Dolor Sit Amet', 'kivo'); ?></h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted"} -->
				<p class="has-muted-color has-text-color">
					<?php echo esc_html__('Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'kivo'); ?>
				</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><a href="#"><?php echo esc_html__('Lorem ipsum &rarr;', 'kivo'); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.5rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card"
				style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"1.75rem"}}} -->
				<p class="has-accent-color has-text-color" style="font-size:1.75rem">&#9650;</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading"><?php echo esc_html__('Consectetur Elit', 'kivo'); ?></h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted"} -->
				<p class="has-muted-color has-text-color">
					<?php echo esc_html__('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.', 'kivo'); ?>
				</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><a href="#"><?php echo esc_html__('Lorem ipsum &rarr;', 'kivo'); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->