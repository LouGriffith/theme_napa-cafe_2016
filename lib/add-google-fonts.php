<?php

/**
 * Manage google fonts of load_google_font()
 * set GOOGLE_FONTS constant in config.php
 * for roots.io, Sage wp theme, place this code in lib/extras.php
 */
 
function load_google_fonts() {

  if( ! defined( 'GOOGLE_FONTS' ) ) return;
    echo '<link href="//fonts.googleapis.com/css?family=' . GOOGLE_FONTS . '" rel="stylesheet" type="text/css" />'."\n";
}

add_action( 'wp_head', 'load_google_fonts' , 1);