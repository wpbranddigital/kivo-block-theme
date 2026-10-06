# Kivo — developer notes

Kivo is a lightweight, conversion-ready full site editing (FSE) block theme for freelancers, agencies, course creators, digital product sellers and small businesses. It is built entirely from native WordPress blocks: no custom blocks, no shortcodes, no custom post types, no forms, and no bundled plugin dependency.

This file is developer/maintainer documentation. For the WordPress.org listing copy, see `readme.txt`.

## Installation

**From within WordPress:** Appearance → Themes → Add New → search "Kivo" → Install → Activate.

**Manual upload:** Appearance → Themes → Add New → Upload Theme → choose `kivo.zip` → Install Now → Activate.

**Local/developer install:** copy (or symlink) the `kivo` folder into `wp-content/themes/`, then activate it from Appearance → Themes.

## Theme structure

```
kivo/
├── style.css              Theme header (name, version, text domain, etc.)
├── theme.json              Global Styles & settings (v3): colors, type, spacing, layout
├── functions.php            Theme supports, style enqueue, pattern category, block styles
├── readme.txt               WordPress.org listing copy
├── README.md                 This file
├── LICENSE                    Full GPLv2-or-later license text
├── screenshot.png             1200×900 theme preview
├── assets/
│   ├── css/custom.css          Small supplemental styles (skip link, focus states, card/pill/FAQ styles)
│   ├── css/editor.css          Editor-canvas styles (imports custom.css)
│   └── fonts/                  Self-hosted Plus Jakarta Sans Variable font + its OFL-1.1 license
├── parts/
│   ├── header.html              The theme's one Header template part
│   └── footer.html              The theme's one Footer template part
├── templates/
│   ├── front-page.html           The site's homepage — pre-assembled from patterns
│   ├── home.html                  Blog index (used when Posts page ≠ front page)
│   ├── index.html                  Fallback template
│   ├── page.html                   Generic page template
│   ├── single.html                 Single blog post
│   ├── singular.html                Generic fallback for any single item
│   ├── archive.html                 Category/tag archives
│   ├── search.html                  Search results
│   └── 404.html                     Not-found page
├── patterns/                   31 pattern PHP files (see "Using patterns" below)
└── styles/
    ├── clean.json                Clean style variation
    ├── dark.json                 Dark style variation
    ├── warm.json                 Warm style variation
    └── bold.json                 Bold style variation
```

## Editing Global Styles

Open **Appearance → Editor → Styles** (or the Styles icon in the Site Editor). From there you can:

- Change colors, typography and layout visually — changes are saved as user customizations layered on top of `theme.json`.
- Switch between the four bundled style variations (Clean / Dark / Warm / Bold) plus the theme's own unnamed default look, from the Styles panel's variation picker.
- Use **Styles → Edit → Colors** to see the eight named color tokens: Primary, Secondary, Accent, Text, Muted, Surface, Border and White. Every pattern references these tokens by name (never a hard-coded hex value), so changing a token's value here updates it everywhere at once.

To change the design system in code, edit `theme.json` directly:

- `settings.color.palette` — the eight color tokens.
- `settings.typography.fontSizes` — the fluid type scale (Small → Huge).
- `settings.spacing.spacingSizes` — the spacing scale (Small / Medium / Large / Extra Large).
- `styles.elements.button` / `.link` / `.heading` / `.h1`–`.h6` — component-level defaults.

## Editing templates

Templates live in `templates/*.html` and use the standard WordPress block-template comment syntax (`<!-- wp:group -->`, etc.). You can edit them two ways:

1. **In the Site Editor** (recommended): Appearance → Editor → Templates → choose a template → edit visually → Save. WordPress stores your edit in the database; the file in `templates/` becomes the fallback if the customization is ever cleared.
2. **In code**: edit the `.html` file directly. Keep the opening/closing `<!-- wp:… -->` / `<!-- /wp:… -->` comments balanced, and keep any `<!-- wp:template-part -->` and `<!-- wp:pattern -->` references pointing at slugs that actually exist (`header`/`footer` for parts, `kivo/<slug>` for patterns).

`front-page.html` is the one exception worth knowing about: because it exists, WordPress will always use it for the site's front page — even if Settings → Reading is set to "your latest posts" — so `home.html` is only used for a separately-designated Posts page.

## Using patterns

All 31 patterns are in `patterns/*.php`, grouped by filename prefix: `hero-*`, `business-*`, `conversion-*`, `content-*`, `layout-*`, `utility-*`. Each pattern is registered with a full metadata docblock (Title, Slug, Categories, Keywords, Description, and Viewport Width on wide/full-bleed patterns) and appears in the block inserter's Patterns tab, filed under both a matching core category and the dedicated "Kivo" category.

To insert a pattern: open any template or page in the editor, click the block inserter (+), switch to the **Patterns** tab, choose **Kivo**, and click a pattern to insert it. Patterns are fully editable after insertion — treat them as a starting point, not a fixed layout.

Suggested pattern combinations by audience (all assembled from the same 31 patterns — no separate demo-import system):

- **Agency**: `hero-split` → `business-client-logos` → `content-portfolio-grid` → `content-case-study-grid` → `conversion-testimonials` → `conversion-final-cta`
- **Course creator**: `hero-primary` → `content-instructor-profile` → `business-why-choose-us` → `conversion-social-proof-stats` → `conversion-pricing-cards` → `conversion-faq` → `conversion-newsletter-cta`
- **Digital product seller**: `hero-split` → `business-features` → `conversion-guarantee` → `conversion-testimonials` → `conversion-pricing-cards` → `conversion-final-cta`
- **Small business**: `hero-primary` → `business-services-grid` → `business-process-steps` → `layout-contact-info` → `conversion-faq`

## Creating a new style variation

1. Duplicate one of the existing files in `styles/` (e.g. `styles/clean.json`) and rename it, e.g. `styles/ocean.json`.
2. Change `"title"` to the name you want shown in the Styles panel.
3. Replace all eight hex values in `settings.color.palette`, **keeping every `slug` exactly as-is** (`white`, `surface`, `border`, `text`, `muted`, `primary`, `secondary`, `accent`). Patterns reference these tokens by slug, so renaming a slug — or leaving one out — breaks color inheritance for every pattern that uses it.
4. Update the `gradients` entry's `gradient` value to match your new `primary`/`secondary` colors (keep the `slug` as `primary-to-secondary`).
5. If your new background is dark, override `styles.color.background` with a literal hex value (see `styles/dark.json` for the pattern) rather than relying on the `white` token, since `white` is intentionally kept at true `#ffffff` in every variation.
6. Check contrast before shipping: every text/background pairing that a pattern actually uses should meet WCAG AA (4.5:1 for normal text, 3:1 for large text/UI). A quick way to check any two hex colors is the WebAIM Contrast Checker (webaim.org/resources/contrastchecker).
7. Reload the Site Editor — your new variation appears automatically in Styles → browse styles.

## Testing accessibility and responsiveness

- **Color contrast**: every color pairing used by a text or button element in this theme's four bundled variations was checked against WCAG AA using the relative-luminance contrast formula. If you add a new pattern or variation, re-check any new color pairing the same way before shipping.
- **Keyboard navigation**: tab through the homepage and confirm the skip-link appears on first Tab press, that focus outlines are visible on every link, button and form field, and that the FAQ accordion (`core/details`) can be opened/closed with Enter/Space.
- **Screen reader spot-check**: run VoiceOver (macOS), NVDA or a browser screen-reader extension across the front page and confirm heading levels read in a logical order (h1 → h2 → h3, no skipped levels) and that all links have meaningful text (avoid stray "click here").
- **Responsive layout**: resize the browser (or use browser dev tools' device toolbar) at common breakpoints — 360px (phone), 768px (tablet), 1024px and 1280px+ (desktop) — and confirm columns stack sensibly, text stays readable, and the mobile navigation overlay opens and closes correctly.
- **RTL**: switch Settings → General → Site Language to an RTL language (e.g. Arabic) and confirm layouts mirror correctly — this theme avoids hard-coded left/right values in favor of logical flex/grid properties, so it should mirror automatically.
- **Reduced motion**: enable "Reduce motion" in your OS accessibility settings and confirm transitions (card hover, FAQ chevron) are effectively instant, per the `prefers-reduced-motion` rule in `assets/css/custom.css`.

## Preparing for a WordPress.org submission

1. Run the actual [Theme Check plugin](https://wordpress.org/plugins/theme-check/) and [PHPCS with the WordPress Coding Standards ruleset](https://github.com/WordPress/WordPress-Coding-Standards) against the theme on a real WordPress install — this repository's own static checks (see below) are a best-effort approximation, not a substitute.
2. Install the theme on a clean WordPress 6.7+ install and click through every template, every pattern, and all four style variations in the Site Editor.
3. Confirm the theme slug/name ("Kivo") is actually available on WordPress.org before submitting.
4. Replace all placeholder contact details (`hello@example.com`, `(555) 123-4567`, `123 Main Street`), placeholder client/press names, and `href="#"` links throughout the patterns with real content, or clearly mark them as examples in your own listing if you're forking this theme.
5. Double-check `style.css` and `readme.txt` headers match (Version, Requires at least, Tested up to, License, Text Domain) and that `Tested up to` reflects the WordPress version you actually tested against at submission time.
6. Zip the theme so `kivo/` is the top-level folder inside the zip (not the contents directly at the zip root).
