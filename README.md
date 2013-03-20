# This is My WordPress Boilerplate
There are many of it but this one is mine.

## Installation

If you are using git to clone the repository do the following:

    git clone --recursive git://github.com/jancbeck/My-Wordpress-Boilerplate
    
Move humans.txt and .htaccess to your WordPress root. Install recommended plugins.

## What it does

### For theme development:
* IE8+ Support
* Uses `style.css` for theme info and less files for styling. Register your own stylesheets.
* Sets up jQuery in footer and in no conflict mode but makes `$` function available in closure. Use `project` object to register global namespaced JS variables.
* Includes a blank screenshot file of theme. Just open, edit, save.
* Sets compilation path of WP-LESS to `/css` directory.
* Replaces WordPress logo on login page with your own logo.
* Conditional classes for IE version stylings on `<html>`
* `index.html` contains various common HTML elements for your content-first styling
* `no-js` / `js` class on `<html>`

### For site administration / content management:
* Hides default meta boxes on edit and dashboard screen.
* Cleans up admin bar.
* Provides shortcode for bloginfo: `[bloginfo key="url"]/about/` will output `http://yourdomain.com/about/`
* Inserts custom CSS and JS to WP Admin views so you can customize it.

### For server performance / security:
* Removes WordPress version number and other junk from `<head>`
* `.htaccess` uses many HTML5 Boilerplate settings to optimize caching behavior

## Recommended Plugins
* [WP-LESS](http://wordpress.org/extend/plugins/wp-less/)
* [Use Google Libraries](http://wordpress.org/extend/plugins/use-google-libraries/)
* [Console](http://wordpress.org/extend/plugins/console/)
* [BackWPup](http://wordpress.org/extend/plugins/backwpup/)

## Recommended Readings:
* [How to enqueue the bundled jQuery in footer – The Right Way](http://wpengineer.com/2482/enqueue-bundled-jquery-in-footer/)
* [markjaquith / WordPress-Skeleton](https://github.com/markjaquith/WordPress-Skeleton)
* [The Right Way to Remove WordPress Version Number](http://www.wpbeginner.com/wp-tutorials/the-right-way-to-remove-wordpress-version-number/)
* [Don't overthink it grids](http://css-tricks.com/dont-overthink-it-grids/)
* [Conditional Stylesheets vs CSS Hacks? Answer: Neither!](http://paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/)
* [Avoiding the FOUC v3.0](http://paulirish.com/2009/avoiding-the-fouc-v3/)

## To do:
* `add_editor_styles()` not working with less files yet