<?php

    /* source: https://gretathemes.com/count-post-views/ */




    /* Get Post View
    ============================================= */
    function context_get_post_view() {

        $count          =   get_post_meta( get_the_ID(), 'post_views_count', true );
        return "$count";

    }




    /* Set Post View
    ============================================= */
    function context_set_post_view() {

        $key            =   'post_views_count';
        $post_id        =   get_the_ID();
        $count          =    (int) get_post_meta( $post_id, $key, true );
        $count ++;

        update_post_meta( $post_id, $key, $count );

    }




    /* Posts Column Views
    ============================================= */
    function context_posts_column_views( $columns ) {

        $columns['post_views']  =   'Views';
        return $columns;

    }




    /* Posts Custom Column Views
    ============================================= */
    function context_posts_custom_column_views( $columns ) {

        if( $column === 'post_views' ){

            echo context_get_post_view();

        }

    }

?>



