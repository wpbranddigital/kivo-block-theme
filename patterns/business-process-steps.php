<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Business: Process Steps
 * Slug: kivo/business-process-steps
 * Categories: kivo, features
 * Keywords: process, steps, how it works, onboarding
 * Viewport Width: 1400
 * Description: A four-step numbered process row explaining how a project or engagement moves from first contact to delivery.
 * Inserter: true
 *
 * @package Kivo
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'How it works', 'kivo' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"xx-large","style":{"typography":{"fontWeight":"800"}}} --><p class="has-primary-color has-text-color has-xx-large-font-size" style="font-weight:800">01</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":5} --><h5 class="wp-block-heading"><?php echo esc_html__( 'Discovery call', 'kivo' ); ?></h5><!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"muted"} --><p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'We learn about your goals and audience.', 'kivo' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"xx-large","style":{"typography":{"fontWeight":"800"}}} --><p class="has-primary-color has-text-color has-xx-large-font-size" style="font-weight:800">02</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":5} --><h5 class="wp-block-heading"><?php echo esc_html__( 'Proposal', 'kivo' ); ?></h5><!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"muted"} --><p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'A clear scope, timeline and fixed price.', 'kivo' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"xx-large","style":{"typography":{"fontWeight":"800"}}} --><p class="has-primary-color has-text-color has-xx-large-font-size" style="font-weight:800">03</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":5} --><h5 class="wp-block-heading"><?php echo esc_html__( 'Build', 'kivo' ); ?></h5><!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"muted"} --><p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Design and development, with regular check-ins.', 'kivo' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"xx-large","style":{"typography":{"fontWeight":"800"}}} --><p class="has-primary-color has-text-color has-xx-large-font-size" style="font-weight:800">04</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":5} --><h5 class="wp-block-heading"><?php echo esc_html__( 'Launch', 'kivo' ); ?></h5><!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"muted"} --><p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Final review, testing, and a smooth go-live.', 'kivo' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
