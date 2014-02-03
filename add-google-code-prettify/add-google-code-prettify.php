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
function add_google_code_script(){
	$google_code_script = "<script src='https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&skin=sunburst'></script>";
	echo $google_code_script;
}

add_action('wp_head', 'add_google_code_script');

?>
