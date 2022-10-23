<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        <?php do_action('ew_daev_head_styles'); ?>
    </style>

    <script>
        /**
         * Fades images in on load to prevent curtain load
         *
         * @param   target    References the element / img tag self
         *
         * @return  void
         */
        function loadElementonLoad(target) {
            target.style.animationPlayState = "running";
        }
    </script>

    <?php wp_head(); ?>
</head>

<body <?php
        $boxed_layout = get_theme_mod('ew_daev_boxed_layout', true);

        $boxed_layout_class = "boxed-layout-false";
        if (true == $boxed_layout) {
            $boxed_layout_class = "boxed-layout-true";
        }
        body_class(
            [
                get_theme_mod('ew_daev_header_layout'),
                get_theme_mod('ew_daev_nav_mobile_style'),
                get_theme_mod('ew_daev_boxed_layout'),
                $boxed_layout_class
            ]
        ); ?>>

    <script>
        {
            let mode = localStorage.getItem("ew_daev_mode");

            if (mode) {

                console.log("Mode: " + mode);
                switch (mode) {
                    case "mode-dark":
                        document.body.classList.add("mode-dark");
                        break;
                    case "mode-80s":
                        document.body.classList.add("mode-80s");
                        break;
                }
            }
        }
    </script>

    <?php wp_body_open(); ?>

    <div class="bindweed">

        <?php
        $header_style = get_theme_mod('ew_daev_header_layout');

        switch ($header_style) {
            case "logo-nav":
                get_template_part('tp/header/logo-nav');
                break;
            case "nav-logo":
                get_template_part('tp/header/nav-logo');
                break;
            case "logo-center-nav":
                get_template_part('tp/header/logo-center-nav');
                break;
            case "nav-logo-left-content":
                get_template_part('tp/header/logo-nav-left-content');
            default:
                break;
        }
