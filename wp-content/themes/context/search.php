<!-- Head
============================================= -->
<?php get_header(); ?>


    <!-- Header
    ============================================= -->
    <?php get_template_part( 'partials/layout/header', 'search' ); ?>


    <!-- Content
    ============================================= -->
    <section id="main-content" style="padding: 30px; background: skyblue;">
        
        <div class="row">


            <main class="page-content col-xs-8" style="padding: 30px; background: palegoldenrod;">


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

            
        </div>

        <!-- IMPORTANT: include clear float below every row -->
        <div class="clear-float"></div> 
        
    </section>
    <!-- Content [END] -->

     <script>
        /* Search Highlight
        =============================================
         * get searched text */
        var searchedText = "<?php the_search_query(); ?>";
        console.log('searchedText: ' + searchedText);

        /* convert searched term to lowercase */
        var lowercaseSearch = searchedText.toLowerCase();

        /* create regex */
        var searchRegex = new RegExp(lowercaseSearch, 'g');

        function highlightSearchedTerm(element) {
            jQuery(element).each(function(){
                /* get inner text of title */
                var inner = jQuery(this).html();

                /* convert inner text to string */
                var innerToString = inner.toString();

                /* convert inner string to lowercase */
                var innerStringLowercase = innerToString.toLowerCase();

                /* match entered string to inner contents */
                var matchStr =  innerStringLowercase.match(searchRegex);

                /* if match found do things */
                if (matchStr != null) {
                    /* get index start location */
                    var indexStart = innerStringLowercase.indexOf(lowercaseSearch);
                    /* get index end location */
                    var indexEnd = indexStart + lowercaseSearch.length;

                    /* insert span with class highlight around searched word */
                    var highlightOutput = inner.substring(0, indexStart) + "<span class='highlight'>" + inner.substring(indexStart, indexEnd) + "</span>" + inner.substring(indexEnd);
                    jQuery(this).html(highlightOutput);
                }
            });
        }

        highlightSearchedTerm('.js--search__title');
        // highlightSearchedTerm('.post-card__title');
        highlightSearchedTerm('.post-card__author');
        highlightSearchedTerm('.post-card__categories');
        highlightSearchedTerm('.post-card p');








        searchArray = lowercaseSearch.split(' ');
        console.log(searchArray);


        function highlightSearchedArray(element){
            for (var i = 0; i < searchArray.length; i++) {
                console.log('============= ' + searchArray[i] + ' =============');

                jQuery(element).each(function(){
                    var inner = jQuery(this).html();
                    var innerToString = inner.toString();
                    var innerStringLowercase = innerToString.toLowerCase();
                    var matchStr =  innerStringLowercase.match(searchArray[i]);

                    if (matchStr != null) {
                        console.log('idk: ' + matchStr);
                        var indexStart = innerStringLowercase.indexOf(searchArray[i]);
                        console.log('idk start: ' + indexStart);
                        var indexEnd = indexStart + searchArray[i].length;
                        console.log('idk end: ' + indexEnd);
                        var highlightOutput = inner.substring(0, indexStart) + "<span class='highlight--sub'>" + inner.substring(indexStart, indexEnd) + "</span>" + inner.substring(indexEnd);
                        jQuery(this).html(highlightOutput);
                    }
                });
            }
        }

        // highlightSearchedArray('.post-card__title');
        highlightSearchedArray('.post-card__author');
        highlightSearchedArray('.post-card__categories');
        highlightSearchedArray('.post-card p');






        /* Search Highlight [END] */
    </script>

<!-- Footer
============================================= -->
<?php get_footer(); ?>