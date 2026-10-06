<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Utility: Logo Showcase
 * Slug: kivo/utility-logo-showcase
 * Categories: kivo, call-to-action
 * Keywords: logos, press, featured, media
 * Viewport Width: 1400
 * Description: A standalone 'as featured in' section with a heading and a two-row grid of press or partner wordmarks — separate from the compact client-logos strip used near a hero.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"textAlign":"center","level":3} -->
	<h3 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'As featured in', 'kivo' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","textColor":"muted","style":{"typography":{"fontWeight":"700"}}} --><p class="has-text-align-center has-muted-color has-text-color" style="font-weight:700"><?php echo esc_html__( 'The Daily Post', 'kivo' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","textColor":"muted","style":{"typography":{"fontWeight":"700"}}} --><p class="has-text-align-center has-muted-color has-text-color" style="font-weight:700"><?php echo esc_html__( 'Founder Weekly', 'kivo' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","textColor":"muted","style":{"typography":{"fontWeight":"700"}}} --><p class="has-text-align-center has-muted-color has-text-color" style="font-weight:700"><?php echo esc_html__( 'Studio Digest', 'kivo' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","textColor":"muted","style":{"typography":{"fontWeight":"700"}}} --><p class="has-text-align-center has-muted-color has-text-color" style="font-weight:700"><?php echo esc_html__( 'Indie Makers', 'kivo' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
