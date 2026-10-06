=== Kivo ===
Contributors: wpbranddigital25
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
Version: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: blog, entertainment, one-column, two-columns, grid-layout, custom-colors, custom-menu, editor-style, featured-images, full-site-editing, block-patterns, style-variations, rtl-language-support, translation-ready, wide-blocks, block-styles

A lightweight, conversion-ready WordPress block theme — a Gutenberg full site editing (FSE) theme for freelancers, agencies, course creators and small businesses, built entirely from native blocks.

== Description ==

Kivo is a lightweight, conversion-ready full site editing (FSE) block theme for freelancers, agencies, course creators, digital product sellers and small businesses. It's built entirely from native WordPress blocks — there is no page builder, no custom blocks, no shortcodes and no bundled plugin. Activate Kivo, open the Site Editor, and assemble a professional homepage from the bundled pattern library.

The pattern library covers 31 patterns across six categories. Hero patterns (primary, split with image, dark, and minimal) give you four different above-the-fold openings. Business patterns cover a services grid, a features section, a numbered process-steps row, a client-logos strip and a "why choose us" benefits section. Conversion patterns are aimed squarely at turning visitors into leads: pricing cards, testimonials, social-proof stats, a guarantee band, an FAQ accordion built on the native Details block, a newsletter-style call to action, and a bold final call to action. Content patterns support blogs, portfolios and case studies: a blog grid, a featured-post spotlight, a portfolio grid, a case-study grid, and an instructor/author profile for course creators. Layout patterns add an announcement bar, a page-title band for inner pages, a contact-information row, and alternate header and footer designs you can drop into the Header and Footer template parts. Utility patterns round things out with a 404 layout, a search empty-state, a callout box, an editorial pull-quote and a logo showcase section.

Kivo ships four Global Styles variations — Clean, Dark, Warm and Bold — each with its own color palette, all built from the same reusable color tokens (Primary, Secondary, Accent, Text, Muted, Surface, Border and White) so every pattern keeps working correctly no matter which style is active. Switch between them instantly from the Site Editor's Styles panel, with no rebuilding required. Colors in every variation were checked for WCAG AA text contrast.

The front page is pre-assembled from the pattern library into a complete homepage — hero, client logos, services, process steps, social-proof stats, portfolio, testimonials, pricing, FAQ and a closing call to action — so you have a working starting point the moment you activate the theme, which you're free to rearrange, trim or extend using the same patterns.

Kivo includes basic compatibility with WooCommerce: if WooCommerce is active, product galleries and core shop, cart and checkout pages will display using WooCommerce's own block templates without breaking your layout. This is not a full custom WooCommerce design system — it simply ensures the theme won't get in WooCommerce's way.

= Key features =

* 31 native block patterns across six categories: Hero, Business, Conversion, Content, Layout and Utility.
* Four Global Styles variations — Clean, Dark, Warm and Bold — switchable instantly, all sharing the same color tokens.
* A pre-assembled, pattern-based homepage (front-page.html) ready the moment you activate the theme.
* Nine templates covering every part of a typical site: front page, blog index, generic page, single post, generic singular fallback, archive, search, and 404.
* A named, reusable design system exposed through Global Styles: Primary, Secondary, Accent, Text, Muted, Surface, Border and White colors; a consistent spacing scale (Small/Medium/Large/Extra Large); and a fluid typography scale from Body text through Heading 1–6.
* Built entirely from native WordPress blocks — no custom blocks, no shortcodes, no custom post types, no forms, and no bundled plugin required.
* Basic WooCommerce compatibility (product gallery support; no custom WooCommerce template overrides).
* Self-hosted variable font (Plus Jakarta Sans), no external font or tracking requests, and a wide/contained layout system (1200px max width).
* Translation ready, with a consistent `kivo` text domain throughout.
* Accessibility-conscious: visible focus states, semantic headings, WCAG AA color contrast checked in all four style variations, and reduced-motion support.
* Responsive by default, and RTL-friendly (no hard-coded left/right assumptions in layout).
* Professional placeholder copy across the pattern library, written for four audiences: agencies, course creators, digital product sellers, and small businesses.

== Installation ==

= From within WordPress =

1. Go to Appearance → Themes → Add New.
2. Search for "Kivo".
3. Click Install, then click Activate.

= Uploading in WordPress =

1. Go to Appearance → Themes → Add New → Upload Theme.
2. Upload the kivo.zip file.
3. Click Install Now, then click Activate.

= Building your homepage =

1. Activate the theme — the front page already displays a complete, pattern-based homepage.
2. In the Site Editor, open Styles and choose the Clean, Dark, Warm or Bold variation.
3. Edit the Header and Footer template parts to add your logo, menu and contact details. Try the alternate "Layout: Alternate Header (Centered)" and "Layout: Alternate Footer (Simple)" patterns if you'd like a different layout.
4. Open the front page in the Site Editor and rearrange, remove or add pattern sections from the pattern inserter to match your business (see the README.md for suggested Agency, Course Creator, Digital Product and Small Business combinations).
5. Publish your posts as usual — the blog index, single post, archive and search templates will pick them up automatically.

See README.md in the theme package for full developer notes, including how to edit Global Styles, how to create a new style variation, and how to prepare the theme for a WordPress.org submission.

== Frequently Asked Questions ==

= Does this theme require any plugin to work? =

No. Every template, template part and pattern in Kivo is built entirely from native WordPress blocks. Nothing needs to be installed or activated for the site to render and work correctly.

= Does Kivo include a working contact form? =

No — WordPress core doesn't ship a form-handling block, and Kivo intentionally avoids adding one. The Layout: Contact Information pattern and the mailto/tel links throughout the theme are the built-in way to let visitors reach you; if you want an actual submission form, install any block-based form plugin you like.

= Is this theme compatible with WooCommerce? =

Kivo includes basic WooCommerce support (product gallery features) so standard shop, product, cart and checkout pages display correctly using WooCommerce's own templates. It does not include a custom-designed WooCommerce experience.

= Can I change the colors, fonts and spacing? =

Yes. Open the Site Editor and go to Styles to adjust colors, typography and layout, or switch between the four bundled style variations (Clean, Dark, Warm, Bold) for a one-click re-skin.

= Where do I report bugs or request features? =

Please use the theme's support forum on WordPress.org.

== Changelog ==

= 1.0.1 =
* Fixed: Skip-to-content accessibility link visibility on keyboard focus.
* Added: Accessible screen-reader-text and focus styles to style.css and custom.css.
* Updated: Replaced promotional and theme-feature copy in screenshot.png with neutral placeholder text per WordPress.org theme review guidelines.

= 1.0.0 =
* Initial release.

== Copyright ==

Kivo WordPress Theme, (C) 2026 bPlugins.
Kivo is distributed under the terms of the GNU GPL v2 (or later).

Kivo bundles the following third-party resources:

* Plus Jakarta Sans Variable Font, Copyright 2020 The Plus Jakarta Sans Project Authors (https://github.com/tokotype/PlusJakartaSans).
  License: SIL Open Font License, 1.1. Included at assets/fonts/, license text included at assets/fonts/jakarta-OFL-1.1.txt.
  Source: https://fontsource.org/fonts/plus-jakarta-sans

All other code, markup, patterns and templates in this theme are original work created for Kivo and are licensed under the GPLv2 (or later), the same as WordPress. The screenshot (screenshot.png) is original artwork created for this theme and is likewise released under the GPLv2 (or later).

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
