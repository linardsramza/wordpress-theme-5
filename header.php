<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500%7CQuicksand:400,700%7CPlayfair+Display:400,700" rel="stylesheet">
  <?php wp_head(); ?>
  <?php get_template_part('includes/header-options'); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header<?php if(is_front_page()): ?> has-hero<?php endif; ?>">
  <div class="container">
    <div class="row">
      <div class="col-8 text-left my-auto d-md-none">
        <a class="header-logo" href="<?php echo esc_url( home_url('/') ); ?>" title="<?php bloginfo('name'); ?>">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-mobile.svg" alt="">
        </a>
      </div>
      <div class="col-4 d-flex justify-content-end justify-content-md-start">
        <div class="header-menu-toggler d-flex flex-column align-items-center justify-content-center header-text-shadow">
          <span class="d-none d-md-inline">Menu</span>
          <i class="icons icon-menu"></i>
        </div>
      </div>
      <div class="col-md-4 text-center my-auto d-none d-md-block">
        <a class="header-logo" href="<?php echo esc_url( home_url('/') ); ?>" title="<?php bloginfo('name'); ?>">
        <?php if(otm_get_image_url('logo_light')): ?>
          <img src="<?php echo otm_get_image_url('logo_light'); ?>" alt="">
        <?php else: ?>
          <?php bloginfo('name'); ?>
        <?php endif; ?>
        </a>
      </div>
      <div class="col-12 col-md-4 d-none d-md-flex justify-content-end align-items-center">
        <div class="header-phone-wrapper text-center header-text-shadow">
          <p><span>Free</span> Consultations</p>
          <a href="tel:<?php echo otm_get_option('phone_number_intl'); ?>" title="Call Us"><?php echo otm_get_option('phone_number'); ?></a>
        </div>
      </div>
    </div>
  </div>
</header>