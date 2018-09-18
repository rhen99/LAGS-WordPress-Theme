<?php

function showcase_css(){
    ?>
    <style>
        .showcase{
            background-image: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_directory'). '/img/default.jpg'); ?>);
        }

        .showcase-overlay{
            background-color: <?php echo get_theme_mod('showcase_overlay', '#000' ); ?>;
        }

    </style>
    <?php
}

add_action('wp_head', 'showcase_css');
