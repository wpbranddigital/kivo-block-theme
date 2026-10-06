<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Content: Blog Grid
 * Slug: kivo/content-blog-grid
 * Categories: kivo, query
 * Keywords: blog, posts, grid, articles
 * Viewport Width: 1400
 * Description: A three-column grid of the latest posts, each with a featured image, category, title, excerpt and date, driven by a live query loop.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading"><?php echo esc_html__( 'From the blog', 'kivo' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":true},"layout":{"type":"grid","columnCount":3}} -->
	<div class="wp-block-query">
		<!-- wp:post-template -->

			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"0.75rem"}}} /-->

			<!-- wp:post-terms {"term":"category","textColor":"primary","fontSize":"small","style":{"spacing":{"margin":{"top":"0.75rem"}},"typography":{"fontWeight":"700","textTransform":"uppercase"}}} /-->

			<!-- wp:post-title {"level":4,"isLink":true} /-->

			<!-- wp:post-excerpt {"excerptLength":18,"textColor":"muted"} /-->

			<!-- wp:post-date {"fontSize":"small","textColor":"muted"} /-->

		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
