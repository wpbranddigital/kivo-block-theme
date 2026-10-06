<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Hero: Minimal
 * Slug: kivo/hero-minimal
 * Categories: kivo, banner
 * Keywords: hero, homepage, landing, minimal, simple
 * Description: A plain, left-aligned, text-only hero with a headline, a short line of supporting copy and a single text link — no background color or imagery.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"0.75rem"}},"layout":{"type":"constrained","contentSize":"620px"}} -->
<div class="wp-block-group alignwide"
	style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
	<h1 class="wp-block-heading has-xx-large-font-size">
		<?php echo esc_html__('Simple tools for independent work', 'kivo'); ?>
	</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
	<p class="has-muted-color has-text-color has-large-font-size">
		<?php echo esc_html__('No dashboards to learn, no setup calls required. Just a clear, honest product page.', 'kivo'); ?>
	</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><a href="#"><?php echo esc_html__('Explore what\'s included &rarr;', 'kivo'); ?></a></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->