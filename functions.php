<?php
/**
 * This file is used to do some basic setup to use Vue App as the theme, and add
 * support for post thumbnails, etc
 */

// flush_rewrite_rules( false );

require_once( __DIR__ . '/wp_enqueues.php' );
require_once( __DIR__ . '/vue_enqueues.php' );
require_once( __DIR__ . '/custom_post_types.php' );





