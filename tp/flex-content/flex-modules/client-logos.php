<?php if ( get_sub_field( 'flex_section_heading' ) || get_sub_field( 'ew_daev_flex_var_client_logos' ) ) : ?>

<section class="flex-module flex-client-logos relative" style="<?php  ew_style_print( 'ew_daev_flex_section_background_color', 'background-color', true ); ew_style_print( 'ew_settings_txt_color', 'color', true ); ew_style_print( 'ew_settings_txt_alignment', 'text-align', true ); ?>">

    <div class="dark-mode-overlay"></div>

    <div class="l-wrapper <?php ew_flex_settings_sizes(); ?> relative">

    <?php ew_help_field( 'flex_section_heading', true, '<h2 class="flex-section-headering">', '</h2>' ); ?>

    <?php if( have_rows( 'ew_daev_flex_var_client_logos' ) ) : ?>

        <div class="flex-client-logos-img-container flex justify-center flex-wrap">

        <?php while( have_rows( 'ew_daev_flex_var_client_logos' ) ) : the_row(); ?>

            <?php print_img_single('ew_daev_flex_var_client_logo', true); ?>

        <?php endwhile; ?>

        </div>

    <?php endif; ?>

    </div>

</section>

<?php endif; ?>