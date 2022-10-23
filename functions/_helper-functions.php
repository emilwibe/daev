<?php

/**
 * ACF
 */

// ACF SUBFIELD
function ew_help_field($field_name, $sub_field = false, $before = '', $after = '', $alternative = '')
{
    if ($sub_field) {
        if (get_sub_field($field_name)) {

            echo $before;
            echo get_sub_field($field_name);
            echo $after;
        } elseif ($alternative) {
            echo $before;
            echo $alternative;
            echo $after;
        }
    } else {
        if (get_field($field_name)) {

            echo $before;
            echo get_field($field_name);
            echo $after;
        } elseif ($alternative) {
            echo $before;
            echo $alternative;
            echo $after;
        }
    }
}



function print_img_single($field_id, $sub_field = false, $before = '', $after = '')
{
    if ($sub_field) {
        if (get_sub_field($field_id)) {

            $attachment_id = get_sub_field($field_id);

            echo $before . wp_get_attachment_image($attachment_id, 'full', false, ['class' => 'fade-in-on-load', 'onload' => 'loadElementonLoad (this)']) . $after;
        }
    } else {
        if (get_field($field_id)) {

            $attachment_id = get_field($field_id);

            echo $before . wp_get_attachment_image($attachment_id, 'full', false, ['class' => 'fade-in-on-load', 'onload' => 'loadElementonLoad (this)']) . $after;
        }
    }
}

function print_video_single($field_id, $sub_field = false)
{
    $video_url = "";
    if ($sub_field) {
        $video_url = get_sub_field($field_id);
    } else {
        $video_url = get_field($field_id);
    }

    if ($video_url) {
        echo '<video muted autoplay loop>
            <source src="' . $video_url . '" type="video/mp4">
    </video>';
    }
}

/**
 * HERO MODULE BUTTON
 */

function hero_module_btn($btn_txt, $btn_link, $btn_color, $btn_bg, $btn_ghost)
{
    $ghost = "";
    if (!empty(get_sub_field($btn_ghost))) {
        $ghost = "ghost";
    }
    if (get_sub_field($btn_txt)) :

        echo '<button class="btn hero-btn ' . $ghost . ' " style="background-color:' . get_sub_field($btn_bg) . ';border-color:' . get_sub_field($btn_bg) . ';color:' . get_sub_field($btn_color) . ';">';

        if (get_sub_field($btn_link)) :

            $link_data = get_sub_field($btn_link);

            echo '<a href="' . $link_data['url'] . '" target="' . $link_data['target'] . '" style="color:' . get_sub_field($btn_color) . ';">';

        else :

            echo '<a href="#">';

        endif;

        echo get_sub_field($btn_txt);

        echo '</a>';

        echo '</button>';

    endif;
}

// FUNCTION TO PRINT STYLES FROM REUSEABLE FIELDS
function ew_style_print($field_name, $css_property, $sub_field = false)
{

    if (!$sub_field) {
        if (get_field($field_name)) {
            echo $css_property . ": " . get_field($field_name) . ";";
        }
    } else {
        if (get_sub_field($field_name)) {
            echo $css_property . ": " . get_sub_field($field_name) . ";";
        }
    }
}

// Flex Settings sizes
function ew_flex_settings_sizes()
{
    $classes = " ";

    if (get_sub_field('ew_daev_flex_section_width')) {
        $classes .= get_sub_field('ew_daev_flex_section_width') . " ";
    }

    echo $classes;
}

/**
 * 
 */
function print_array_values_w_spaces($array)
{
    foreach ($array as $value) {
        echo " ";
        echo $value;
    }
}
