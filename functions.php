<?php
    function comic_files() {
        // Bootstrap Icons
        wp_enqueue_style("bootstrap_icons", "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
        //  index.js
        wp_enqueue_script("main_js", get_theme_file_uri("./index.js"), array("jquery"), "1.0", true);
        // Loading in custom Font Inter
        wp_enqueue_style("custom_font", "//fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap");
        // Loading in Bootstrap CSS
        wp_enqueue_style("bootstrap_css", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css");
        // Loading in Bootstrap JavaScript
        wp_enqueue_script("bootstrap_javascript", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", array(), "0.1", true);
        // Load in the main styles
        wp_enqueue_style("main_styles", get_stylesheet_uri());

        // Remove admin bar rendering
        // remove_action('wp_footer', 'wp_admin_bar_render', 1000); 
    }

    // this function called the comic files function. Args are 1. when to call the file and 2. what function to call
    add_action("wp_enqueue_scripts", "comic_files");




    function comic_features() {
        // register_nav_menu("headerMenuLocation", "Header Menu Location");
        // register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );

        register_nav_menu("headerMenuLocation", "Header Menu Location");

        register_nav_menu("sidebarNavLocation", "sidebar Nav Location");

        add_theme_support("title-tag");
    }

    add_action("after_setup_theme", "comic_features");
    
    // function register_primary_menu() {
    //     register_nav_menu( 'primary', __( 'Primary Menu', 'theme-text-domain' ) );
    // }
    
    // add_action( 'after_setup_theme', 'register_primary_menu' );
?>




