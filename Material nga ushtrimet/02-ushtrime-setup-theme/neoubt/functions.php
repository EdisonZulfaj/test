<?php
  // load css
  function wp_neoubt_enqueue_styles () {
      wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/style.css' );
  }

  add_action( 'wp_enqueue_scripts', 'wp_neoubt_enqueue_styles' );

  // Register Menu
  register_nav_menus( [
      'main-menu' => esc_html__( 'Main Menu', 'neoubt' )
  ] );
  
?>