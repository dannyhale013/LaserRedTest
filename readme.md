## Theme Structure

* acf-blocks - *Contains any blocks that are added through ACF. These are added to the theme through the functions.php file.*
* Assets - *Contains the unminified images and anything else we need i.e. fonts. Upload any images here and they will be compiled and optimised by the task runner.*
* compiled - *Contains all of the minified CSS/JS files and images. If linking to a file or an image link to this folder.*
* js - *development directory for JS*
  * Admin - *Contains JS files that part of the framework*
  * Modules - *Contains the files that are added to the theme, you should add yours here.*
  * Vendor - *You can add external scripts here if you want to pull them directly into the JS file, I tend to import these into WP_head though to prevent errors.*
  * site.js - *This is the file that the bundler looks for, make sure you include your modules into this file to get them onto the site, an example is in the framework.*
* sass - *development directory for SASS*
  * Base - *Contains all of the base styles includes reset sheets, form styling, typography etc.*
  * Components - *These are files that link to each part of the site, I tend to create a new Sass file for each component I build e.g. Header/nav/footer etc. In the base framework there are some styles that come with it.*
  * Utils - *This contains any utilities folder such as Variables for colours/breakpoints etc and mixins for your media queries.*
  * style.scss - *Like this JS this is the main sheet you need to include links to all of your Sass files in. There are multiple examples already in this document.*
* 404.php
* footer.php
* functions.php - *contains all includes and definitions*
* header.php
* index.php
* page.php - *standard content use or overwrite with flexible content*
* search.php
* searchform.php
* single.php

## Grunt

Grunt runs from the root of the WordPress. You will need to run npm install before it will work.

Commands:
~~~~
npm install   Installs all neccessary files needed for compiler (run on first install only)
grunt         run all commands plus watch files
grunt build   single time run through all commands
~~~~