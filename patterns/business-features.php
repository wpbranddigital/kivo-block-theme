<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Business: Features Section
 * Slug: kivo/business-features
 * Categories: kivo, features
 * Keywords: features, benefits, grid, icons
 * Viewport Width: 1400
 * Description: A centered heading followed by a three-column grid of features, each with a symbol, title and short description.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"620px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":2} -->
		<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Everything you need, nothing you don\'t', 'kivo' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color"><?php echo esc_html__( 'A focused set of features that cover the essentials well.', 'kivo' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontSize":"1.75rem"}}} -->
			<p class="has-primary-color has-text-color" style="font-size:1.75rem">&#9670;</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php echo esc_html__( 'Fast by default', 'kivo' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php echo esc_html__( 'Lightweight markup and no bloated frameworks slowing pages down.', 'kivo' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"textColor":"secondary","style":{"typography":{"fontSize":"1.75rem"}}} -->
			<p class="has-secondary-color has-text-color" style="font-size:1.75rem">&#9679;</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php echo esc_html__( 'Easy to edit', 'kivo' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php echo esc_html__( 'Every section is a block you can rearrange in the Site Editor.', 'kivo' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"1.75rem"}}} -->
			<p class="has-accent-color has-text-color" style="font-size:1.75rem">&#9650;</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php echo esc_html__( 'Built to last', 'kivo' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php echo esc_html__( 'Native WordPress blocks only, so there\'s nothing extra to maintain.', 'kivo' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
