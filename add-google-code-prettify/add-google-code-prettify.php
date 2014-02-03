<?php
/*
Plugin Name: Add Google-Code-Prettify Headr Plugin
Plugin URI: http://unk.jp.net/
Feed URI:
Description: This is test Version for add google-code-prettify header.
Version: 0.1
Author: Satoshi Watanabe
Author URI: http://unk.jp.net/
*/
// styles
function add_google_code_prettify_header() {
        $google_code_prettify_script = "\n<script src=\"https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&skin=sunburst\"></script>\n";
        print($google_code_prettify_script);
}

add_action('wp_head', 'add_google_code_prettify_header');
?>

