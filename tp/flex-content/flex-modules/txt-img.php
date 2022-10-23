<section class="txt-media-container">

    <div class="flex-module flex-txt-media l-wrapper<?php ew_flex_settings_sizes(); ?>grid <?php ew_help_field('ew_settings_content_division', true); ?>">

        <?php print_img_single('ew_daev_flex_txt_img_img', true, '<div class="media">', '</div>'); ?>

        <?php if (get_sub_field('ew_daev_flex_txt_img_video')) : ?>

            <?php
            $video_settings = get_sub_field('ew_daev_flex_video_control');
            ?>

            <div class="media">

                <video <?php print_array_values_w_spaces($video_settings); ?>>
                    <source src="<?php the_sub_field('ew_daev_flex_txt_img_video'); ?>" type="video/mp4">

                </video>

            </div>
            <!--/.media-->

        <?php endif; ?>

        <?php if (get_sub_field( 'ew_daev_flex_media_oembed' )) : ?>

            <div class="media oembed fluid-iframe-container">

            <?php the_sub_field( 'ew_daev_flex_media_oembed' ); ?>

            </div>

        <?php endif; ?>

        <?php ew_help_field('ew_daev_flex_txt_img_txt', true, '<div class="wysiwyg flex ' . get_sub_field('ew_daev_flex_vertical_adjustment') . '"><div>', '</div></div>'); ?>
    </div>

</section>