<section class="flex-module flex-hero l-wrapper <?php ew_flex_settings_sizes(); ?> <?php ew_help_field('ew_daev_flex_section_overlay', true); ?> <?php if (get_sub_field('ew_daev_flex_section_background_color') || get_sub_field('ew_daev_flex_section_background_image') || get_sub_field('ew_daev_flex_section_background_video')) {
                                                                                                                                                                                echo 'section-bg';
                                                                                                                                                                            }; ?>" style="<?php  ew_style_print( 'ew_daev_flex_section_background_color', 'background-color', true ); ?>">

    <div class="overlay"></div>

    <?php print_img_single('ew_daev_flex_section_background_image', true); ?>

    <?php print_video_single( 'ew_daev_flex_section_background_video', true ); ?>
    
    <div class="hero-content l-wrapper <?php the_sub_field('daev_settings_align_horizontal_pos'); ?>  <?php the_sub_field( 'ew_daev_flex_section_content_width' ); ?>  <?php the_sub_field( 'daev_settings_align_text' ); ?>">

        <?php ew_help_field('ew_daev_flex_hero_heading', true, '<h2>', '</h2>'); ?>

        <?php ew_help_field('ew_daev_flex_hero_sub_heading', true, '<h3>', '</h3>'); ?>

        <?php ew_help_field( 'ew_daev_flex_hero_wysiwyg', true, '<div class="hero-wysiwyg">', '</div>' ); ?>

    </div>
    
    <?php if (get_sub_field('ew_daev_flex_hero_btn1_txt') || get_sub_field('ew_daev_flex_hero_btn2_txt')) : ?>
    
    <div class="hero-btn-container">

        <?php hero_module_btn('ew_daev_flex_hero_btn1_txt', 'ew_daev_flex_hero_btn1_link', 'ew_daev_flex_hero_btn1_txt_color', 'ew_daev_flex_hero_btn1_bg', 'ew_daev_flex_hero_btn1_ghost'); ?>

        <?php hero_module_btn('ew_daev_flex_hero_btn2_txt', 'ew_daev_flex_hero_btn2_link', 'ew_daev_flex_hero_btn2_txt_color', 'ew_daev_flex_hero_btn2_bg', 'ew_daev_flex_hero_btn2_ghost'); ?>

    </div>

    <?php endif; ?>

</section>