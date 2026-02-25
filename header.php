<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header style="max-width: 900px; margin: 24px auto; padding: 0 16px;">
  <a href="<?php echo esc_url( home_url('/') ); ?>" style="text-decoration:none;">
    <strong><?php bloginfo('name'); ?></strong>
  </a>
  <div style="margin-top: 8px; opacity: .7;">
    <?php bloginfo('description'); ?>
  </div>
  <hr style="margin-top: 16px;">
</header>
