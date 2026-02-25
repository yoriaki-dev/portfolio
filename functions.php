<?php
function yori_theme_assets() {
  wp_enqueue_style(
    'yori-main-style',
    get_template_directory_uri() . '/assets/css/main.css',
    array(),
    filemtime( get_template_directory() . '/assets/css/main.css' )
  );

  wp_enqueue_script(
  'yori-script',
  get_template_directory_uri() . '/assets/js/main.js',
  array(),
  filemtime( get_template_directory() . '/assets/js/main.js' ),
  true
);
}
add_action('wp_enqueue_scripts', 'yori_theme_assets');
