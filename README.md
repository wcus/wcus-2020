WordCamp US 2020 Theme
======================

This is the theme used for the WordCamp US website. The compiled CSS is loaded by the us.wordcamp.org site, while the child theme itself can be used in a local development environment.

To work on the site:

First, set up a local install using the [wordpress-meta-environment](https://github.com/WordPress/meta-environment), and follow [this guide](https://ryelle.codes/2016/07/local-development-for-wordcamp-websites/) to set up a new wordcamp site.

1. Add this repo to your themes directory, activate it, and set up the site
2. Create a new branch
3. Make your changes in the Sass as needed, see "CSS Structure" for where things live.
4. You can run `npm run watch`, which will rebuild the CSS as you're working, and also works with [livereload](https://chrome.google.com/webstore/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei) (alternately you can run `npm run build` to do a one-time build of the CSS)
5. Commit your changes, _including the compiled CSS_
6. Create a PR for your change
7. Request review from anyone on the web team, or post in #web


## Development

Get started by running `npm install`. This will install the gulp, sass, autoprefixer, stylelint, and livereload dependencies.

We use stylelint with [the WordPress Coding Standards for scss](https://github.com/WordPress-Coding-Standards/stylelint-config-wordpress) enforced (with [minor exceptions](.stylelintrc.json)). With PostCSS + autoprefixer, you don't need to worry about vendor prefixes. Lastly, you can use [a livereload browser extension](http://livereload.com/extensions/) to avoid manual reloads. If you don't want to use a browser extension, turn on `SCRIPT_DEBUG` to always load the latest CSS file.

The scripts available to you are:

- `npm run build`: Run the linter and build the CSS file
- `npm run lint`: Run the linter by itself
- `npm run watch`: Run the linter and build the CSS file, watching scss files for changes. Also turns on the livereload server.

If you need to, you can also run `npx gulp css` (if you're on npm 5.2+), which will compile the CSS, skipping the linter. Please don't do this if you can avoid it 🙂

If you have trouble getting this to run, try installing [nvm](https://github.com/nvm-sh/nvm#installing-and-updating) & running `nvm install`. This will update your node & npm version to the expected versions.


## CSS Structure

The CSS structure is based on `_s`'s sass structure. Filenames are intended to be self-explanatory, but here's a general overview. **Sections with ‼️ are where most work will happen,** the rest is fairly stable from last year's theme.

When working, we might end up removing entire files, or adding new ones for new features, or totally changing the structure of a file— that's to be expected, since WordCamp.org has added new features & refactored old features.

### `abstracts/` & `_normalize.scss`

Abstracts contains all mixins & variables. Variables are used for spacing rhythm, font details, colors, and asset paths. Assets such as SVGs need to be uploaded to [wc-us.org](https://wc-us.org/) since WordCamp.org does not allow SVGs to be uploaded — if you need an account here, ask in #web.

### `typography/` & `elements/`

Base styles for the site.

### `elements/blocks/`

‼️ Individual block styles. The `reusable/` folder is used for resuable blocks with specific classes (ex the hero block, `is-hero-header`, that takes over the header section on a full-width page).

### `forms/`

Basic form styles, also includes some overrides for Contact Forms. Specific forms should be styled in their respective `site` file, unless they repeat across the site.

### `navigation/`

Links & menu styles.

### `modules/`

Self-contained components of CSS. Screen reader text helper class, float clearings, and alignments. You shouldn't need to touch these (except maybe the alignments).

### `site/secondary`

‼️ This is where widgets & widget areas are styled. The footer of each page is multiple widget-areas stacked, and widgets + Jetpack's widget visibility are used to control the content on each page.

### `site/primary`

‼️ This is where each page is styled - sponsors, speakers, schedule, etc.

### `media/`

Media, galleries, and captions.


## Colors

The block color palette colors are re-mapped by the theme to our theme colors. The following table shows which colors are mapped to what theme color. Note that if you use Dark Gray, Vivid Red, or Vivid Cyan Blue, it automatically switches the text color to white.

| Editor Color | Theme Color Name | Theme Color |
|--------------|------------------|-------------|
| ![](https://placehold.it/18/f78da7/000000?text=+) Pale Pink  | Light Pink | ![](https://placehold.it/18/f98386/000000?text=+) `#f98386` |
| ![](https://placehold.it/18/cf2e2e/000000?text=+) Vivid Red  | Red | ![](https://placehold.it/18/bd2b2e/000000?text=+) `#bd2b2e` |
| ![](https://placehold.it/18/ff6900/000000?text=+) Luminous vivid orange | | n/a |
| ![](https://placehold.it/18/fcb900/000000?text=+) Luminous vivid amber | | n/a |
| ![](https://placehold.it/18/7bdcb5/000000?text=+) Light green cyan | | n/a |
| ![](https://placehold.it/18/00d084/000000?text=+) Vivid green cyan | | n/a |
| ![](https://placehold.it/18/8ed1fc/000000?text=+) Pale Cyan Blue  | Light Blue | ![](https://placehold.it/18/7ea1b8/000000?text=+) `#7ea1b8` |
| ![](https://placehold.it/18/0693e3/000000?text=+) Vivid Cyan Blue  | Blue | ![](https://placehold.it/18/003b63/000000?text=+) `#003b63` |
| ![](https://placehold.it/18/eeeeee/000000?text=+) Very Light Gray  | Cream | ![](https://placehold.it/18/fffffa/000000?text=+) `#fffffa` |
| ![](https://placehold.it/18/abb8c3/000000?text=+) Cyan bluish gray | | n/a |
| ![](https://placehold.it/18/313131/000000?text=+) Very Dark Gray  | Grey | ![](https://placehold.it/18/303030/000000?text=+) `#303030` |
