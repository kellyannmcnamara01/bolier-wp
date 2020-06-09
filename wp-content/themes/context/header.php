<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<!-- Head
============================================= -->
<head>


    <!-- Meta tags 
    ============================================= -->
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Meta Tags [END] -->



    <!-- Google Analytics 
    ============================================= -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        // update XXXXX with the GA id
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- Google Analytics [END] -->



    <!-- Stylesheets
    ============================================= -->
    <?php wp_head(); ?>
    <!-- Stylesheets [END] -->



</head>
<!-- Head [END] -->



<!-- Body
============================================= -->
<body <?php body_class('stretched no-transition'); ?> >



    <!-- Google Analytics Async
    ============================================= -->
    <!-- update XXXXX with the GA id -->
    <script>
        window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview');
    </script>
    <script async src='https://www.google-analytics.com/analytics.js'></script>
    <!-- Google Analytics Async [END] -->



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
