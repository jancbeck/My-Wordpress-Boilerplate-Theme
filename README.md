# This is My WordPress Boilerplate Theme

There are many of it but this one is mine.

## Installation

If you are using git to clone the repository do the following:

    git clone --recursive https://github.com/jancbeck/My-Wordpress-Boilerplate-Theme.git
    
Move humans.txt and .htaccess to your WordPress root. Install recommended plugins.

## Features

* Uses `style.css` for theme info and LESS generated files in `/css` for styling. Register your own stylesheets and use concatenation plugins.
* Sets up jQuery in no conflict mode in footer but makes `$` function available in a closure. Use the `project` object to register globally namespaced JS variables.
* Includes a blank screenshot file for the theme. Open, edit, save.
* Conditional classes for IE version stylings for the `<html>` element
* `no-js` / `js` class on `<html>` for progressively enhanced websites

## Recommended Plugins

* [Use Google Libraries](http://wordpress.org/extend/plugins/use-google-libraries/)
* [Console](http://wordpress.org/extend/plugins/console/)
* [White Label CMS](http://wordpress.org/plugins/white-label-cms/)
* [Better WP Security](http://wordpress.org/plugins/better-wp-security/)

## Recommended Readings:

* [How to enqueue the bundled jQuery in footer – The Right Way](http://wpengineer.com/2482/enqueue-bundled-jquery-in-footer/)
* [Don't overthink it grids](http://css-tricks.com/dont-overthink-it-grids/)
* [Conditional Stylesheets vs CSS Hacks? Answer: Neither!](http://paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/)
* [Firefox-Safe "Helvetica Neue Light" Font Stack by nrrrdcore](https://gist.github.com/nrrrdcore/2994238)

## To do:

* mobile first approach
* add more patterns