<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Conversion: Testimonials
 * Slug: kivo/conversion-testimonials
 * Categories: kivo, testimonials
 * Keywords: testimonials, reviews, customers, social proof
 * Viewport Width: 1400
 * Description: Three testimonial cards in a row, each with a star rating, quote and a name and role line.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"blockGap":"var:preset|spacing|large"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'What clients say', 'kivo' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card kivo-stars","backgroundColor":"white","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.75rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card kivo-stars has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size"><?php echo esc_html__( '&#9733;&#9733;&#9733;&#9733;&#9733;', 'kivo' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><?php echo esc_html__( '"Kivo made it easy to launch a homepage that actually looks professional. Enquiries are up since we relaunched."', 'kivo' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small","textColor":"muted"} --><p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Priya Shah, Founder at Northline Studio', 'kivo' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card kivo-stars","backgroundColor":"white","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.75rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card kivo-stars has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size"><?php echo esc_html__( '&#9733;&#9733;&#9733;&#9733;&#9733;', 'kivo' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><?php echo esc_html__( '"Professional from the first call. The finished site matched exactly what we needed, on time."', 'kivo' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small","textColor":"muted"} --><p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Marcus Webb, Operations Lead at Fielding &amp; Co.', 'kivo' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card kivo-stars","backgroundColor":"white","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.75rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card kivo-stars has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size"><?php echo esc_html__( '&#9733;&#9733;&#9733;&#9733;&#9733;', 'kivo' ); ?></p><!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><?php echo esc_html__( '"Clear communication, fair pricing, and a site that actually loads fast. Would recommend without hesitation."', 'kivo' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small","textColor":"muted"} --><p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Elena Cruz, Marketing Manager at Hearth Goods', 'kivo' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
