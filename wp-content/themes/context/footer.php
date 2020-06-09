            <!-- Footer
            ============================================= -->
            <footer id="footer" class="footer" style="background: cornflowerblue; color: white; padding: 30px; font-size: 30px;">
                <p>--- footer content ---</p>



                <!-- Social Handles
                ============================================= -->
                <?php get_template_part( 'partials/reusables/social-links' ); ?>




                <!-- Legal
                ============================================= -->
                <div class="footer__legal" style="background: royalblue; color: white; padding: 30px; font-size: 16px;">

                    <ul class="legal-links">

                        <!-- Terms of Service
                        ============================================= -->
                        <?php
                            if( get_theme_mod( 'context_footer_tos_page' ) ){
                                ?>
                                    <li>
                                        <a href="<?php the_permalink( get_theme_mod( 'context_footer_tos_page' ) ); ?>" class="">Terms of Service</a>
                                    </li>
                                <?php
                            }
                        ?>
                        <!-- Terms of Service [END] -->


                        <!-- Privacy Policy
                        ============================================= -->
                        <?php
                            if( get_theme_mod( 'context_footer_privacy_page' ) ){
                                ?>
                                    <li>
                                        <a href="<?php the_permalink( get_theme_mod( 'context_footer_privacy_page' ) ); ?>" class="">Privacy Policy</a>
                                    </li>
                                <?php
                            }
                        ?>
                        <!-- Privacy Policy [END] -->

                    </ul>

                    <!-- Copyright
                    ============================================= -->
                    <?php
                        if( get_theme_mod( 'context_footer_copyright' ) ){
                            ?>
                                <p><?php echo get_theme_mod( 'context_footer_copyright' ); ?></p>
                            <?php
                        }
                    ?>
                    <!-- Copyright [END] -->

                </div>
                <!-- Legal [END] -->




            </footer>
            <!-- Footer [END] -->



            <!-- Back to Top Btn
            ============================================= -->
            <?php get_template_part( 'partials/reusables/back-to-top' ); ?>



        <!-- External JavaScripts
        ============================================= -->
        <?php wp_footer(); ?>

    </body>

</html>