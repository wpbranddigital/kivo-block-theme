<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Content: Featured Post
 * Slug: kivo/content-featured-post
 * Categories: kivo, query
 * Keywords: featured, spotlight, blog, post
 * Viewport Width: 1400
 * Description: A single large 'spotlight' post with a cover-style featured image, category badge and title, pulling from your latest published post.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"bottom":"1rem"}}}} -->
	<h2 class="wp-block-heading" style="margin-bottom:1rem"><?php echo esc_html__( 'Latest from the blog', 'kivo' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":2,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false},"layout":{"type":"default"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template -->

			<!-- wp:cover {"useFeaturedImage":true,"dimRatio":40,"minHeight":420,"minHeightUnit":"px","isDark":true,"style":{"border":{"radius":"1.25rem"}}} -->
			<div class="wp-block-cover" style="border-radius:1.25rem;min-height:420px">
				<span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span>
				<div class="wp-block-cover__inner-container">
					<!-- wp:post-terms {"term":"category","textColor":"white","className":"kivo-badge"} /-->

					<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"xx-large","textColor":"white"} /-->

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:post-author-name {"textColor":"white","fontSize":"small"} /-->
						<!-- wp:post-date {"textColor":"white","fontSize":"small"} /-->
					</div>
					<!-- /wp:group -->
				</div>
			</div>
			<!-- /wp:cover -->

		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
