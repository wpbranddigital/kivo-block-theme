<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Content: Case Study Grid
 * Slug: kivo/content-case-study-grid
 * Categories: kivo, gallery
 * Keywords: case study, results, client work
 * Viewport Width: 1400
 * Description: A two-column grid of case-study summaries, each pairing a client name and a headline result with a short description.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"
	style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading"><?php echo esc_html__('Case studies', 'kivo'); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.5rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card"
				style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"fontSize":"small","textColor":"muted"} -->
				<p class="has-muted-color has-text-color has-small-font-size">
					<?php echo esc_html__('Northline Studio', 'kivo'); ?>
				</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"textColor":"secondary"} -->
				<h3 class="wp-block-heading has-secondary-color has-text-color">
					<?php echo esc_html__('+64% enquiries', 'kivo'); ?>
				</h3><!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted"} -->
				<p class="has-muted-color has-text-color">
					<?php echo esc_html__('A rebuilt homepage and clearer service pages led to a 64% increase in contact-form enquiries within three months.', 'kivo'); ?>
				</p><!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><a href="#"><?php echo esc_html__('Read the case study &rarr;', 'kivo'); ?></a></p>
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
				<!-- wp:paragraph {"fontSize":"small","textColor":"muted"} -->
				<p class="has-muted-color has-text-color has-small-font-size">
					<?php echo esc_html__('Hearth Goods', 'kivo'); ?>
				</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"textColor":"secondary"} -->
				<h3 class="wp-block-heading has-secondary-color has-text-color">
					<?php echo esc_html__('3.2x course sign-ups', 'kivo'); ?>
				</h3><!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted"} -->
				<p class="has-muted-color has-text-color">
					<?php echo esc_html__('A focused landing page and clearer pricing tripled sign-ups for their flagship online course.', 'kivo'); ?>
				</p><!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><a href="#"><?php echo esc_html__('Read the case study &rarr;', 'kivo'); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->