# This is My WordPress Boilerplate
There are many of it but this one is mine.

## Installation

If you are using git to clone the repository do the following:

    git clone --recursive git://github.com/jancbeck/My-Wordpress-Boilerplate
    
Move humans.txt and .htaccess to your WordPress root. Install recommended plugins.

## What it does

* IE8+ Support
* Uses `style.css` for theme info and LESS generated files in `/css` for styling. Register your own stylesheets.
* Sets up jQuery in footer and in no conflict mode but makes `$` function available in closure. Use `project` object to register global namespaced JS variables.
* Includes a blank screenshot file for the theme. Open, edit, save.
* Conditional classes for IE version stylings on `<html>`
* `no-js` / `js` class on `<html>` for progressively enhanced websites
* `.htaccess` uses many HTML5 Boilerplate settings to optimize caching behavior and security


## Recommended Plugins
* [Use Google Libraries](http://wordpress.org/extend/plugins/use-google-libraries/)
* [Console](http://wordpress.org/extend/plugins/console/)
* [White Label CMS](http://wordpress.org/plugins/white-label-cms/)
* [Better WP Security](http://wordpress.org/plugins/better-wp-security/)

## Recommended Readings:
* [How to enqueue the bundled jQuery in footer – The Right Way](http://wpengineer.com/2482/enqueue-bundled-jquery-in-footer/)
* [markjaquith / WordPress-Skeleton](https://github.com/markjaquith/WordPress-Skeleton)
* [Don't overthink it grids](http://css-tricks.com/dont-overthink-it-grids/)
* [Conditional Stylesheets vs CSS Hacks? Answer: Neither!](http://paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/)
* [Avoiding the FOUC v3.0](http://paulirish.com/2009/avoiding-the-fouc-v3/)
* [Firefox-Safe "Helvetica Neue Light" Font Stack by nrrrdcore](https://gist.github.com/nrrrdcore/2994238)

## To do:
* mobile first approach
* include WP as submodule
* include theme as plugin