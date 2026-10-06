<?php
/**
 * Kivo theme functions and definitions.
 *
 * Kivo is a full-site-editing (FSE) block theme. This file intentionally
 * stays minimal: it wires up standard theme supports, enqueues styles,
 * registers a pattern category, and registers a small number of native
 * block style variations. It does not add custom blocks, shortcodes,
 * custom post types, forms, or any plugin-like functionality.
 *
 * @package Kivo
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'kivo_setup' ) ) {
	/**
	 * Register theme supports and load the translation textdomain.
	 */
	function kivo_setup() {
		load_theme_textdomain( 'kivo', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'custom-line-height' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'assets/css/editor.css' );

		// Basic WooCommerce compatibility only — no custom WooCommerce
		// template overrides or design system, so the theme never
		// requires WooCommerce to function.
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}
}
add_action( 'after_setup_theme', 'kivo_setup' );

if ( ! function_exists( 'kivo_styles' ) ) {
	/**
	 * Enqueue the theme stylesheet and a small supplemental stylesheet.
	 */
	function kivo_styles() {
		wp_enqueue_style( 'kivo-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
		wp_enqueue_style(
			'kivo-custom',
			get_template_directory_uri() . '/assets/css/custom.css',
			array( 'kivo-style' ),
			wp_get_theme()->get( 'Version' )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'kivo_styles' );

if ( ! function_exists( 'kivo_pattern_categories' ) ) {
	/**
	 * Register a dedicated pattern category so every Kivo pattern is easy
	 * to find in the inserter, in addition to the core categories each
	 * pattern is also filed under.
	 */
	function kivo_pattern_categories() {
		register_block_pattern_category(
			'kivo',
			array( 'label' => _x( 'Kivo', 'Block pattern category', 'kivo' ) )
		);
	}
}
add_action( 'init', 'kivo_pattern_categories' );

if ( ! function_exists( 'kivo_block_styles' ) ) {
	/**
	 * Register a small number of native block style variations used by the
	 * bundled patterns (e.g. a bordered "card" look for a Group block).
	 * These use the core register_block_style() API only — no custom
	 * blocks are registered anywhere in this theme.
	 */
	function kivo_block_styles() {
		register_block_style(
			'core/group',
			array(
				'name'  => 'card',
				'label' => _x( 'Card', 'Block style', 'kivo' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'pill',
				'label' => _x( 'Pill', 'Block style', 'kivo' ),
			)
		);

		register_block_style(
			'core/details',
			array(
				'name'  => 'faq',
				'label' => _x( 'FAQ', 'Block style', 'kivo' ),
			)
		);
	}
}
add_action( 'init', 'kivo_block_styles' );
