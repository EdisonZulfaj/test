<?php
  // add theme support
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-formats', [ 'gallery', 'qoute', 'video', 'image', 'link']);

  // load css
  function wp_neoubt_enqueue_styles () {
      wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/style.css' );
  }

  add_action( 'wp_enqueue_scripts', 'wp_neoubt_enqueue_styles' );

  // Register Menu
  register_nav_menus( [
      'main-menu' => esc_html__( 'Main Menu', 'neoubt' )
  ] );

  // init widgets
  function wp_neoubt_init_widgets () {
    register_sidebar( [
      'id' => 'main-sidebar',
      'name' => __( 'Main Sidebar', 'neoubt' ),
      'description' => __( 'Description main sidebar', 'neoubt' ),
      'before_widget' => '<section class="widget">',
      'after_widget' => '</section>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>'
    ] );
  }

  add_action( 'widgets_init', 'wp_neoubt_init_widgets' );
  
?>