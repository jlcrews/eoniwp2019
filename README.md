# Project Title
[CLIENT NAME] Wordpress Theme

## Package Name
`package-name-usage`

## Table of Contents
- [Author](#author)
- [Dependencies](#dependencies)
- [Theme Custom Post Types](#theme-custom-post-types)
- [Theme Shortcodes](#theme-shortcodes)
- [Theme Fonts](#theme-fonts)
- [Image Preloading](#image-preloading)
- [Theme Plugins](#theme-plugins)
- [WordPress Version](#wordpress-version)
- [Coding Styles](#coding-styles)
- [Base Theme History](#base-theme-history)

## Author
* [Zachary Smith](https://www.twitter.com/zachisit)

## Dependencies
* SASS - theme uses SASS compiler for all stylesheets used in theme. The SASS files (.css and .scss) are located in the root/sass directory. The common files (normalized, mixins, variables) are moved into the root/sass/common/ directory. This directory set up is intentional to work with a compiler on the server or via local development, depending on your work flows.
* In-house templating engine, found in functions.php
* While respecting that a theme does not need a list of poorly written plugins that complete functionality that a competent developer can write from scratch, this theme has chosen certain plugins that extend or compliment the overall architecture of the theme itself. A list of those plugins are in the section [Theme Plugins](#theme-plugins) - if any of these plugins are not installed then an error will print in the admin screen alerting user to complete installation
 
## Theme Custom Post Types
* @TODO

## Theme Shortcodes
* @TODO

## Theme Fonts
* To save server space and user load time, we use Google Fonts. The following are the client approved fonts this theme relies on. Fallback font will be sans-serif.
* Google Fonts '[FONT-NAME]' for [FONT-USES-ON-SITE] - https://fonts.google.com/specimen/[FULL-FONT-URL]

Font Name  | Font Usage
------------- | -------------
Name Here  | Headlines, buttons, finish names, tab names (all caps)
Name Here  | descriptions, general text, pricing
Name Here  | used rarely where specified, this is really only an accent attention getting font.

* Fallback will be sans-serif in most cases.

## Image Preloading
* Theme utilizing preloading of any files placed inside the theme/images/preload directory. Refer to file documentation on safe-use.

## Theme Plugins
* TODO

## WordPress Version
* At time of last update, this theme was built and tested with WordPress version [WORDPRESS-VERSION-NUMBER].

## Coding Styles
* You will find most of the theme's functionality broken up into directories (i.e., custom post types, shortcodes, templates, etc), loosely mimicking a MVC structure.
* CSS and method declarations will use a title_under_score naming convention
* Function method brackets will start on next line

## Base Theme History
This WordPress theme is forked from a bare-bones base theme created by Zach Smith called [tater](https://github.com/zachisit/tater-wordpress-theme), with base theme version number 1.8.4. Started in the summer of 2017, the purpose of this base theme is to start a new project with the code and coding structures needed to jump start development. This theme does not utilize a parent-child theme structure. This base theme will be updated as Zach progresses through better programming styles and structures. The preferred editor is PHPStorm, hence the existing .gitigore rule(s).