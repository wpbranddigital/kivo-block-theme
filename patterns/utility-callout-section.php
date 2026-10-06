<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Utility: Callout Section
 * Slug: kivo/utility-callout-section
 * Categories: kivo, call-to-action
 * Keywords: callout, notice, highlight, alert
 * Viewport Width: 1400
 * Description: A bordered, single-column callout box for highlighting a limited-time note or important piece of information.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","backgroundColor":"surface","style":{"border":{"radius":"1rem","left":{"color":"var:preset|color|primary","width":"4px"}},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-surface-background-color has-background" style="border-left-color:var(--wp--preset--color--primary);border-left-width:4px;border-radius:1rem;margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:paragraph -->
	<p><strong><?php echo esc_html__( 'Limited availability:', 'kivo' ); ?></strong> <?php echo esc_html__( 'we\'re only taking on a small number of new projects this quarter — get in touch early to reserve a spot.', 'kivo' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
