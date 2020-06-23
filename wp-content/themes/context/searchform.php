<!-- Search Form
============================================= -->
<div class="search-form__container" style="background: rebeccapurple;">
    <?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="form-field">
            <label>
                <input 
                    type="search" 
                    id="<?php echo $unique_id; ?>" 
                    class="search-form__field" 
                    name="s"
                    value="<?php the_search_query(); ?>"
                    placeholder="<?php _e( 'Search', 'context' ); ?>"/>
                    <span class="e-reader-only">Search Bar</span>
            </label>
            <button type="submit" class="btn btn--submit">Search</button>
        </div>
    </form>

</div>
<!-- Search Form [END] -->