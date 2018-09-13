<?php

function showcase_css(){
    ?>
    <style>
        .showcase{
            background-image: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_directory'). '/img/default.jpg'); ?>);
        }

    </style>
    <?php
}

add_action('wp_head', 'showcase_css');
