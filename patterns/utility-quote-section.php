<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Utility: Quote Section
 * Slug: kivo/utility-quote-section
 * Categories: kivo, text
 * Keywords: quote, pull quote, press, editorial
 * Description: A large, centered editorial pull-quote — for a founder statement or press mention, distinct from the customer-testimonial pattern.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">
	<!-- wp:quote {"align":"center","className":"is-style-plain"} -->
	<blockquote class="wp-block-quote is-style-plain has-text-align-center">
		<!-- wp:paragraph {"fontSize":"x-large"} --><p class="has-x-large-font-size"><?php echo esc_html__( '"We built Kivo because we were tired of choosing between \'fast\' and \'good-looking\'. It shouldn\'t be a trade-off."', 'kivo' ); ?></p><!-- /wp:paragraph -->
	</blockquote>
	<!-- /wp:quote -->

	<!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"small"} -->
	<p class="has-text-align-center has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( '— Founder\'s note', 'kivo' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
