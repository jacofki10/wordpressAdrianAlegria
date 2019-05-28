<?php

function files()
{
  wp_enqueue_script('main-js', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
  wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), true);

  wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
  wp_enqueue_style('main_styles', get_stylesheet_uri(), NULL, microtime());

  wp_enqueue_style('custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css');
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Lato');
}

add_action('wp_enqueue_scripts', 'files');
