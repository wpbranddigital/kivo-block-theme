<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Layout: Contact Information
 * Slug: kivo/layout-contact-info
 * Categories: kivo, contact
 * Keywords: contact, address, phone, email
 * Viewport Width: 1400
 * Description: A three-column row of contact-method cards for email, phone and office address, each with a symbol and the value.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Get in touch', 'kivo' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.4rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontSize":"1.5rem"}}} --><p class="has-primary-color has-text-color" style="font-size:1.5rem">&#9993;</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":5} --><h5 class="wp-block-heading"><?php echo esc_html__( 'Email', 'kivo' ); ?></h5><!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size"><a href="mailto:hello@example.com"><?php echo esc_html__( 'hello@example.com', 'kivo' ); ?></a></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.4rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"textColor":"secondary","style":{"typography":{"fontSize":"1.5rem"}}} --><p class="has-secondary-color has-text-color" style="font-size:1.5rem">&#9742;</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":5} --><h5 class="wp-block-heading"><?php echo esc_html__( 'Phone', 'kivo' ); ?></h5><!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size"><a href="tel:+15551234567"><?php echo esc_html__( '(555) 123-4567', 'kivo' ); ?></a></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"blockGap":"0.4rem"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"1.5rem"}}} --><p class="has-accent-color has-text-color" style="font-size:1.5rem">&#8962;</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":5} --><h5 class="wp-block-heading"><?php echo esc_html__( 'Office', 'kivo' ); ?></h5><!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size"><?php echo esc_html__( '123 Main Street, Suite 400', 'kivo' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
