<ul class="social" style="padding: 30px; font-size: 16px; background: slateblue;">
    <?php
        if( get_theme_mod( 'context_fb' ) ){
            ?>
                <li>
                    <a href="<?php echo get_theme_mod( 'context_fb' ); ?>" target="_blank" class="social__link">Facebook</a>
                </li>
            <?php
        }
        if( get_theme_mod( 'context_ig' ) ){
            ?>
                <li>
                    <a href="<?php echo get_theme_mod( 'context_ig' ); ?>" target="_blank" class="social__link">Instagram</a>
                </li>
            <?php
        }
        if( get_theme_mod( 'context_li' ) ){
            ?>
                <li>
                    <a href="<?php echo get_theme_mod( 'context_li' ); ?>" target="_blank" class="social__link">LinkedIn</a>
                </li>
            <?php
        }
        if( get_theme_mod( 'context_tw' ) ){
            ?>
                <li>
                    <a href="<?php echo get_theme_mod( 'context_tw' ); ?>" target="_blank" class="social__link">Twitter</a>
                </li>
            <?php
        }
        if( get_theme_mod( 'context_yt' ) ){
            ?>
                <li>
                    <a href="<?php echo get_theme_mod( 'context_yt' ); ?>" target="_blank" class="social__link">YouTube</a>
                </li>
            <?php
        }
        if( get_theme_mod( 'context_pi' ) ){
            ?>
                <li>
                    <a href="<?php echo get_theme_mod( 'context_pi' ); ?>" target="_blank" class="social__link">Pinterest</a>
                </li>
            <?php
        }
    ?>
</ul>