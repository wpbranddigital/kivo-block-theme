<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Layout: Alternate Header (Centered)
 * Slug: kivo/layout-header
 * Categories: kivo, header
 * Keywords: header, navigation, logo, alternate
 * Viewport Width: 1400
 * Description: An alternate, centered-logo header design you can paste into the Header template part in place of the default layout.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"tagName":"header","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0.5rem"},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull"
	style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">

	<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:site-logo {"width":36,"shouldSyncIcon":true} /-->

		<!-- wp:site-title {"level":0,"textAlign":"center"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"1.75rem"}},"fontSize":"small"} /-->

</header>
<!-- /wp:group -->