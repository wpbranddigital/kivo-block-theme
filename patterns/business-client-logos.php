<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Business: Client Logos
 * Slug: kivo/business-client-logos
 * Categories: kivo, call-to-action
 * Keywords: logos, clients, trust, social proof
 * Viewport Width: 1400
 * Description: A slim, single-row strip introducing a list of client or partner names in a muted, wordmark-style treatment — no images required.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}},"blockGap":"1rem"},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium)">

	<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
	<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Lorem ipsum dolor', 'kivo' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontWeight":"700"}}} --><p class="has-muted-color has-text-color" style="font-weight:700"><?php echo esc_html__( 'Lorem', 'kivo' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontWeight":"700"}}} --><p class="has-muted-color has-text-color" style="font-weight:700"><?php echo esc_html__( 'Ipsum', 'kivo' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontWeight":"700"}}} --><p class="has-muted-color has-text-color" style="font-weight:700"><?php echo esc_html__( 'Dolor', 'kivo' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontWeight":"700"}}} --><p class="has-muted-color has-text-color" style="font-weight:700"><?php echo esc_html__( 'Amet', 'kivo' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontWeight":"700"}}} --><p class="has-muted-color has-text-color" style="font-weight:700"><?php echo esc_html__( 'Elit', 'kivo' ); ?></p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
