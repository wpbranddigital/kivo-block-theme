<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Utility: 404 Layout
 * Slug: kivo/utility-404-layout
 * Categories: kivo, text
 * Keywords: 404, not found, error page
 * Description: A friendly 404 'page not found' layout with a search field and a link back to the homepage. Used by the theme's 404 template.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}},"blockGap":"1rem"},"layout":{"type":"constrained","contentSize":"620px"}} -->
<div class="wp-block-group alignwide"
	style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"huge","style":{"typography":{"fontWeight":"800"}}} -->
	<p class="has-text-align-center has-primary-color has-text-color has-huge-font-size" style="font-weight:800">404</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1} -->
	<h1 class="wp-block-heading has-text-align-center"><?php echo esc_html__('This page can\'t be found', 'kivo'); ?>
	</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color">
		<?php echo esc_html__('The page you were looking for doesn\'t exist, or may have moved. Try searching, or head back home.', 'kivo'); ?>
	</p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"Search","buttonText":"Search","align":"center"} /-->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"
				href="/"><?php echo esc_html__('Back to Homepage', 'kivo'); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->