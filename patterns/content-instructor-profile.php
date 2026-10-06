<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Content: Instructor / Author Profile
 * Slug: kivo/content-instructor-profile
 * Categories: kivo, about
 * Keywords: instructor, author, profile, bio, course creator
 * Description: A profile section for a course creator or author, pairing a circular avatar placeholder with a name, credentials and short biography.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide is-style-card" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

	<!-- wp:group {"className":"kivo-avatar","backgroundColor":"surface","style":{"dimensions":{"minHeight":"110px"}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-group kivo-avatar has-surface-background-color has-background" style="min-height:110px;border-radius:999px;width:110px">
		<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"1.75rem"}}} --><p class="has-muted-color has-text-color" style="font-size:1.75rem"><?php echo esc_html__( 'JD', 'kivo' ); ?></p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"level":4} -->
		<h4 class="wp-block-heading"><?php echo esc_html__( 'Jamie Diaz', 'kivo' ); ?></h4>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"small","textColor":"primary","style":{"typography":{"fontWeight":"700"}}} -->
		<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Instructor, Product Design', 'kivo' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"muted"} -->
		<p class="has-muted-color has-text-color"><?php echo esc_html__( 'Jamie has spent over a decade helping independent creators turn their expertise into structured, sellable courses.', 'kivo' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
