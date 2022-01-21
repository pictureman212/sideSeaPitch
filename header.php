<?php
/**
 * Default Header Template
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="h-100">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  

  <title>Forest Foundation</title>
 

  <?php // Place favicon.ico and apple-touch-icon.png in the root of the domain ?>

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?= vite('main.js') ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class('d-flex flex-column h-100'); ?>>



<!--NAV-->
<header class="site-header" role="banner">
  <nav class="navbar navbar-expand-md bg-primary navbar-dark py-2 fixed-top ">
    <div class="container-fluid">
<a href="<?= home_url( '/' ); ?>" class="navbar-brand"> <img id="logo" src="<?php echo get_theme_file_uri('src/assets/images/HomePageLogo.png') ?>" alt="logo"> </a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>


<div class="collapse navbar-collapse" id="navbarMain">
 <div class="navbar-nav ms-auto"><?php h5bs_primary_nav(); ?></div>
 <a href="" class="btn btn-warning">DONATE</a>
</div>
</div>
</nav>
</header>