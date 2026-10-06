<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Conversion: Social Proof Stats
 * Slug: kivo/conversion-social-proof-stats
 * Categories: kivo, call-to-action
 * Keywords: stats, numbers, social proof, credibility
 * Viewport Width: 1400
 * Description: A row of three large numbers with short labels underneath, used to build credibility with concrete results.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","fontSize":"xx-large","style":{"typography":{"fontWeight":"800"}},"textColor":"primary"} -->
			<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size" style="font-weight:800"><?php echo esc_html__( '240+', 'kivo' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","fontSize":"small","textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Projects delivered', 'kivo' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","fontSize":"xx-large","style":{"typography":{"fontWeight":"800"}},"textColor":"primary"} -->
			<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size" style="font-weight:800"><?php echo esc_html__( '98%', 'kivo' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","fontSize":"small","textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Client satisfaction', 'kivo' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","fontSize":"xx-large","style":{"typography":{"fontWeight":"800"}},"textColor":"primary"} -->
			<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size" style="font-weight:800"><?php echo esc_html__( '12+', 'kivo' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","fontSize":"small","textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Years in business', 'kivo' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
