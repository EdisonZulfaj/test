<?php
    // add theme support
    add_theme_support( 'title-tag' );

    // enqueue styles
    function wp_neoubt_enqueue_script() {
        wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/style.css' );
    }

    add_action( 'wp_enqueue_scripts', 'wp_neoubt_enqueue_script' );

    // register menu
    register_nav_menus( [
        'main-menu' => esc_html__( 'Main menu', 'neoubt' )
    ] );

    // init_widgets
    function wp_neoubt_init_widgets() {
        register_sidebar( [
            'id' => 'main-sidebar',
            'name' => esc_html__( 'Main sidebar', 'neoubt' ),
            'description' => esc_html__('Main sidebar description', 'neoubt'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ] );
    }

    add_action( 'widgets_init', 'wp_neoubt_init_widgets' );


?>