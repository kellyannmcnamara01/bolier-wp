<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<!-- Head
============================================= -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Stylesheets
    ============================================= -->
    <?php wp_head(); ?>

</head>
<!-- Head [END] -->



<!-- Body
============================================= -->
<body <?php body_class('stretched no-transition'); ?> >


	<!-- Skip to Main Content Btn
    ============================================= -->
    <a class="e-reader-only" href="#main-content">Skip to main content</a>
    <!-- Skip to Main Content Btn [END] -->


    <!-- Cookie Banner
    ============================================= -->
    <?php get_template_part( 'partials/layout/cookie-banner' ); ?>
    <!-- Cookie Banner [END] -->


    <!-- Top Bar
    ============================================= -->
    <?php get_template_part( 'partials/layout/top-bar' ); ?>
    <!-- Top Bar [END] -->
