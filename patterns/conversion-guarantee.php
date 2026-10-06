<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Conversion: Guarantee Section
 * Slug: kivo/conversion-guarantee
 * Categories: kivo, call-to-action
 * Keywords: guarantee, risk-free, refund, trust
 * Description: A reassuring, bordered guarantee band pairing a symbol with a short risk-reversal statement.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide is-style-card" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

	<!-- wp:paragraph {"textColor":"secondary","style":{"typography":{"fontSize":"2.5rem"}}} -->
	<p class="has-secondary-color has-text-color" style="font-size:2.5rem">&#9679;</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"level":4} -->
		<h4 class="wp-block-heading"><?php echo esc_html__( '30-day money-back guarantee', 'kivo' ); ?></h4>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"muted"} -->
		<p class="has-muted-color has-text-color"><?php echo esc_html__( 'Not the right fit? Let us know within 30 days for a full refund, no questions asked.', 'kivo' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
