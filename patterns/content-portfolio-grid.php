<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Content: Portfolio Grid
 * Slug: kivo/content-portfolio-grid
 * Categories: kivo, gallery
 * Keywords: portfolio, projects, agency, work
 * Viewport Width: 1400
 * Description: A three-column portfolio grid for an agency or freelancer, each entry a placeholder panel with a project title, category and link.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"
	style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading"><?php echo esc_html__('Selected work', 'kivo'); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"backgroundColor":"surface","style":{"dimensions":{"minHeight":"180px"},"border":{"radius":"1rem"}},"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-group has-surface-background-color has-background"
				style="border-radius:1rem;min-height:180px">
				<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"2rem"}}} -->
				<p class="has-muted-color has-text-color" style="font-size:2rem">&#9670;</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"primary","style":{"spacing":{"margin":{"top":"0.75rem"}},"typography":{"fontWeight":"700","textTransform":"uppercase"}}} -->
			<p class="has-primary-color has-text-color has-small-font-size"
				style="font-weight:700;margin-top:0.75rem;text-transform:uppercase">
				<?php echo esc_html__('Branding', 'kivo'); ?>
			</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php echo esc_html__('Northline Rebrand', 'kivo'); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><a href="#"><?php echo esc_html__('View project &rarr;', 'kivo'); ?></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"backgroundColor":"surface","style":{"dimensions":{"minHeight":"180px"},"border":{"radius":"1rem"}},"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-group has-surface-background-color has-background"
				style="border-radius:1rem;min-height:180px">
				<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"2rem"}}} -->
				<p class="has-muted-color has-text-color" style="font-size:2rem">&#9679;</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"primary","style":{"spacing":{"margin":{"top":"0.75rem"}},"typography":{"fontWeight":"700","textTransform":"uppercase"}}} -->
			<p class="has-primary-color has-text-color has-small-font-size"
				style="font-weight:700;margin-top:0.75rem;text-transform:uppercase">
				<?php echo esc_html__('Web Design', 'kivo'); ?>
			</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php echo esc_html__('Fielding &amp; Co. Website', 'kivo'); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><a href="#"><?php echo esc_html__('View project &rarr;', 'kivo'); ?></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"backgroundColor":"surface","style":{"dimensions":{"minHeight":"180px"},"border":{"radius":"1rem"}},"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-group has-surface-background-color has-background"
				style="border-radius:1rem;min-height:180px">
				<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"2rem"}}} -->
				<p class="has-muted-color has-text-color" style="font-size:2rem">&#9650;</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"primary","style":{"spacing":{"margin":{"top":"0.75rem"}},"typography":{"fontWeight":"700","textTransform":"uppercase"}}} -->
			<p class="has-primary-color has-text-color has-small-font-size"
				style="font-weight:700;margin-top:0.75rem;text-transform:uppercase">
				<?php echo esc_html__('Product', 'kivo'); ?>
			</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php echo esc_html__('Hearth Goods Packaging', 'kivo'); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><a href="#"><?php echo esc_html__('View project &rarr;', 'kivo'); ?></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->