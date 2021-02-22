<?php 
require_once(get_theme_file_path("/inc/tgm.php"));
if(site_url() == "http://localhost/WP/wordpress/"){
    define("VERSION" , time());
}
else {
    define("VERSION", wp_get_theme()->get("version"));
}
function arblog_setup(){
    load_theme_textdomain("arblog");
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
	add_theme_support( "post-formats", array( "image", "gallery", "quote", "audio", "video", "link" ) );
    add_theme_support("html5",array("serach-form","comment-list"));
    add_editor_style("/assets/css/editor-style.css");
    
    register_nav_menu("top-menu",__("Top menu","arblog"));

    add_image_size( "arblog_post_square_image", 400,400, true );
}
add_action("after_setup_theme","arblog_setup");
function arblog_assets(){
    wp_enqueue_style("arblog-fonts-css",get_theme_file_uri()."assets/css/fonts.css",null, VERSION);
    wp_enqueue_style("arblog-fontawesome-css",get_theme_file_uri()."assets/css/font-awesome/css/font-awesome.min.css",null, VERSION);
    wp_enqueue_style("arblog-base-css",get_theme_file_uri()."/assets/css/base.css",null, VERSION);
    wp_enqueue_style("arblog-vendor-css",get_theme_file_uri()."/assets/css/vendor.css",null, VERSION);
    wp_enqueue_style("arblog-main-css",get_theme_file_uri()."/assets/css/main.css",null, VERSION);
    wp_enqueue_style("arblog-css",get_stylesheet_uri());

    wp_enqueue_script("arblog-modernizer-js",get_theme_file_uri()."/assets/js/modernizr.js",null, VERSION);
    wp_enqueue_script("arblog-pace-js",get_theme_file_uri()."/assets/js/pace.min.js",null, VERSION);

    wp_enqueue_script("arblog-jquery-js",get_theme_file_uri()."/assets/js/jquery-3.2.1.min.js",null,VERSION,true);
    wp_enqueue_script("arblog-plugin-js",get_theme_file_uri()."/assets/js/plugins.js",array("jquery"),VERSION,true);
    wp_enqueue_script("arblog-main-js",get_theme_file_uri()."/assets/js/main.js",array("jquery"),VERSION,true);
}
add_action("wp_enqueue_scripts","arblog_assets");
?>