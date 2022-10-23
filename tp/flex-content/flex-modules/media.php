<section class="media-container">

    <div class="flex-module flex-media l-wrapper<?php ew_flex_settings_sizes(); ?>">

        <?php print_img_single('ew_daev_flex_media_img', true); ?>

        <?php if (get_sub_field('ew_daev_flex_media_video')) : ?>

            <?php
            $video_settings = get_sub_field('ew_daev_flex_video_control');
            ?>

            <video <?php print_array_values_w_spaces($video_settings); ?>>
                <source src="<?php the_sub_field('ew_daev_flex_media_video'); ?>" type="video/mp4">

            </video>

            <!--/.media-->

        <?php endif; ?>

    </div>

</section>