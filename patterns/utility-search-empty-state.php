<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Utility: Search Empty State
 * Slug: kivo/utility-search-empty-state
 * Categories: kivo, text
 * Keywords: search, no results, empty state
 * Description: A friendly message shown inside the search results template when a search returns no matches.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained","contentSize":"480px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
	<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"2rem"}}} -->
	<p class="has-muted-color has-text-color" style="font-size:2rem">&#9675;</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":3} -->
	<h3 class="wp-block-heading"><?php echo esc_html__( 'No results found', 'kivo' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"muted"} -->
	<p class="has-muted-color has-text-color"><?php echo esc_html__( 'We couldn\'t find anything matching your search. Try a different keyword, or browse recent posts instead.', 'kivo' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
