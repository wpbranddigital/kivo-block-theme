<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Layout: Announcement Bar
 * Slug: kivo/layout-announcement-bar
 * Categories: kivo, banner
 * Keywords: announcement, bar, notice, banner
 * Viewport Width: 1400
 * Description: A slim, full-width announcement bar for a limited-time message, meant to sit above the header.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"text","style":{"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-text-background-color has-background"
	style="padding-top:0.6rem;padding-right:var(--wp--preset--spacing--small);padding-bottom:0.6rem;padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:paragraph {"align":"center","textColor":"white","fontSize":"small"} -->
	<p class="has-text-align-center has-white-color has-text-color has-small-font-size">
		<?php echo esc_html__('Now booking new projects for next quarter —', 'kivo'); ?> <a href="#"
			style="color:inherit"><?php echo esc_html__('get in touch', 'kivo'); ?></a><?php echo esc_html__('.', 'kivo'); ?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->