<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Business: Why Choose Us
 * Slug: kivo/business-why-choose-us
 * Categories: kivo, features
 * Keywords: benefits, why us, checklist, value proposition
 * Description: A two-column benefits section pairing a heading and short paragraph with a checklist of reasons to choose your business.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":{"left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading"><?php echo esc_html__( 'Lorem ipsum dolor sit amet', 'kivo' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"muted"} -->
		<p class="has-muted-color has-text-color"><?php echo esc_html__( 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'kivo' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
		<!-- wp:list {"style":{"spacing":{"blockGap":"0.6rem"}}} -->
		<ul class="wp-block-list">
			<!-- wp:list-item --><li><?php echo esc_html__( 'Ut enim ad minim veniam, quis', 'kivo' ); ?></li><!-- /wp:list-item -->
			<!-- wp:list-item --><li><?php echo esc_html__( 'Nostrud exercitation ullamco laboris', 'kivo' ); ?></li><!-- /wp:list-item -->
			<!-- wp:list-item --><li><?php echo esc_html__( 'Nisi ut aliquip ex ea commodo', 'kivo' ); ?></li><!-- /wp:list-item -->
			<!-- wp:list-item --><li><?php echo esc_html__( 'Consequat duis aute irure dolor', 'kivo' ); ?></li><!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->
	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
