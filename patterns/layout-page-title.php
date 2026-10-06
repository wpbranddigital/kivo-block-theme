<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Layout: Page Title
 * Slug: kivo/layout-page-title
 * Categories: kivo, banner
 * Keywords: page title, header, heading, inner page
 * Viewport Width: 1400
 * Description: A styled title band for the top of an inner page (About, Services, Contact), with a heading and a short subtitle line.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
	<h1 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'About Us', 'kivo' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"muted"} -->
	<p class="has-muted-color has-text-color"><?php echo esc_html__( 'A short line introducing what this page covers.', 'kivo' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
