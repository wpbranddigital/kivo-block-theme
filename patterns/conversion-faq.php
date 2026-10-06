<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Conversion: FAQ
 * Slug: kivo/conversion-faq
 * Categories: kivo, call-to-action
 * Keywords: faq, questions, accordion, support
 * Description: A list of frequently asked questions built on the native Details block, so it works as an accordion with no plugin required.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"0.75rem"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Lorem ipsum dolor sit amet', 'kivo' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:details {"className":"is-style-faq"} -->
	<details class="wp-block-details is-style-faq"><summary><?php echo esc_html__( 'Consectetur adipiscing elit?', 'kivo' ); ?></summary>
	<!-- wp:paragraph {"textColor":"muted"} -->
	<p class="has-muted-color has-text-color"><?php echo esc_html__( 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'kivo' ); ?></p>
	<!-- /wp:paragraph --></details>
	<!-- /wp:details -->

	<!-- wp:details {"className":"is-style-faq"} -->
	<details class="wp-block-details is-style-faq"><summary><?php echo esc_html__( 'Quis nostrud exercitation ullamco?', 'kivo' ); ?></summary>
	<!-- wp:paragraph {"textColor":"muted"} -->
	<p class="has-muted-color has-text-color"><?php echo esc_html__( 'Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.', 'kivo' ); ?></p>
	<!-- /wp:paragraph --></details>
	<!-- /wp:details -->

	<!-- wp:details {"className":"is-style-faq"} -->
	<details class="wp-block-details is-style-faq"><summary><?php echo esc_html__( 'In voluptate velit esse cillum?', 'kivo' ); ?></summary>
	<!-- wp:paragraph {"textColor":"muted"} -->
	<p class="has-muted-color has-text-color"><?php echo esc_html__( 'Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.', 'kivo' ); ?></p>
	<!-- /wp:paragraph --></details>
	<!-- /wp:details -->

	<!-- wp:details {"className":"is-style-faq"} -->
	<details class="wp-block-details is-style-faq"><summary><?php echo esc_html__( 'Sunt in culpa qui officia?', 'kivo' ); ?></summary>
	<!-- wp:paragraph {"textColor":"muted"} -->
	<p class="has-muted-color has-text-color"><?php echo esc_html__( 'Deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus.', 'kivo' ); ?></p>
	<!-- /wp:paragraph --></details>
	<!-- /wp:details -->

</div>
<!-- /wp:group -->
