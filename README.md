WordCamp US 2019 Theme
======================

This is the theme used for the WordCamp US website. The compiled CSS is loaded by the us.wordcamp.org site, while the child theme itself can be used in a local development environment.

To work on the site:

First, set up a local install using the [wordpress-meta-environment](https://github.com/WordPress/meta-environment), and follow [this guide](https://ryelle.codes/2016/07/local-development-for-wordcamp-websites/) to set up a new wordcamp site.

_Alternately_, you can set up a normal WordPress site & use [the wcus-themes repo](https://github.com/wcus/wcus-themes) to get the WordCamp environment.

1. Add this repo to your themes directory, activate it, and set up the site
2. Create a new branch
3. Make your changes in the Sass as needed, see "CSS Structure" for where things live.
4. You can run `npm run watch`, which will rebuild the CSS as you're working, and also works with [livereload](https://chrome.google.com/webstore/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei) (alternately you can run `npm run build` to do a one-time build of the CSS)
5. Commit your changes, including the compiled CSS
6. Create a PR for your change

## Development

Get started by running `npm install`. This will install the gulp, sass, autoprefixer, stylelint, and livereload dependencies.

We use stylelint with [the WordPress Coding Standards for scss](https://github.com/WordPress-Coding-Standards/stylelint-config-wordpress) enforced (with [minor exceptions](.stylelintrc.json)). With PostCSS + autoprefixer, you don't need to worry about vendor prefixes. Lastly, you can use [a livereload browser extension](http://livereload.com/extensions/) to avoid manual reloads. If you don't want to use a browser extension, turn on `SCRIPT_DEBUG` to always load the latest CSS file.

The scripts available to you are:

- `npm run build`: Run the linter and build the CSS file
- `npm run lint`: Run the linter by itself
- `npm run watch`: Run the linter and build the CSS file, watching scss files for changes. Also turns on the livereload server.

If you need to, you can also run `npx gulp css` (if you're on npm 5.2+), which will compile the CSS, skipping the linter. Please don't do this if you can avoid it 🙂

## CSS Structure

TBD 🎨

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
