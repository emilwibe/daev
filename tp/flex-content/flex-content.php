<?php if ( have_rows( 'ew_daev_flex_content' ) ) : ?>

    <?php while ( have_rows( 'ew_daev_flex_content' ) ) : the_row(); ?>

        <?php

            if ( get_row_layout() == 'ew_daev_flex_hero' ) {
                get_template_part( 'tp/flex-content/flex-modules/hero' );
            } elseif ( get_row_layout() == 'ew_daev_flex_ref_client_logos' ) {
                get_template_part( 'tp/flex-content/flex-modules/client-logos' );
            } elseif ( get_row_layout() == 'ew_daev_flex_text_image' ) {
                get_template_part( 'tp/flex-content/flex-modules/txt-img' );
            } elseif ( get_row_layout() == 'ew_daev_flex_media_text' ) {
                get_template_part( 'tp/flex-content/flex-modules/media-txt' );
            } elseif ( get_row_layout() == 'ew_daev_flex_media_section' ) {
                get_template_part( 'tp/flex-content/flex-modules/media' );
            }

        ?>

    <?php endwhile; ?>

<?php endif; ?>