<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<!-- Head
============================================= -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Stylesheets
    ============================================= -->
    <?php wp_head(); ?>

    <!-- Document Title
    ============================================= -->
    <title>Index Template</title>

</head>
<!-- Head [END] -->



<!-- Body
============================================= -->
<body <?php body_class('stretched no-transition'); ?> >


    <!-- Top Bar
    ============================================= -->
    <?php get_template_part( 'partials/layout/top-bar' ); ?>
    <!-- Top Bar [END] -->


    <!-- Header
    ============================================= -->
    <?php get_template_part( 'partials/layout/header' ); ?>
    <!-- Header [END] -->
