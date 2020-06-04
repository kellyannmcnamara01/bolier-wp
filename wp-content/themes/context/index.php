<!-- Head
============================================= -->
<?php get_header(); ?>


    <!-- Header
    ============================================= -->
    <?php get_template_part( 'partials/layout/header' ); ?>


    <!-- Content
    ============================================= -->
    <section id="content" style="padding: 30px; background: hotpink;">


        <main class="page-content" style="padding: 30px; background: lightpink;">


            <!-- Popular Posts
            ============================================= -->
            <?php /* get_template_part( 'partials/reusables/posts', 'popular' ); */ ?>


            <!-- Posts
            ============================================= -->
            <?php get_template_part( 'partials/reusables/posts' ); ?>



            <!-- Pagination
            ============================================= -->
            <?php get_template_part( 'partials/reusables/pagination-posts' ); ?>


        </main>


        <!-- Sidebar
        ============================================= -->
        <?php get_sidebar(); ?>


    </section>
    <!-- Content [END] -->


<!-- Footer
============================================= -->
<?php get_footer(); ?>