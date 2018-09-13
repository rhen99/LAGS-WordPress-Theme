<?php
function wpl_customizer($wp_customize){

    $wp_customize->add_section('showcase', array(
        'title' => __('Showcase', 'lagstheme'),
        'description' => sprintf(__('Showcase Editor', 'lagstheme')),
        'priority' => 30
    ));
    $wp_customize->add_setting('showcase_image', array(
        'default' => get_bloginfo('template_directory'). '/img/default.jpg',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 'showcase_image', array(
            'label' => __('Showcase Image', 'lagstheme'),
            'section' => 'showcase',
            'settings' => 'showcase_image',
            'priority' => 1
        )
    ));

    $wp_customize->add_setting('showcase_heading', array(
        'default' => _x('Custom Title', 'lagstheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
        'label' => __('Heading', 'lagstheme'),
        'section' => 'showcase',
        'priority' => 2
    ));

    $wp_customize->add_setting('showcase_secondary', array(
        'default' => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, totam.', 'lagstheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_secondary', array(
        'label' => __('Secondary', 'lagstheme'),
        'section' => 'showcase',
        'priority' => 3
    ));

    $wp_customize->add_setting('btn_url', array(
        'default' => _x('http://localhost/wordpress/', 'lagstheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
        'label' => __('Button Url', 'lagstheme'),
        'section' => 'showcase',
        'priority' => 4
    ));




}
add_action('customize_register', 'wpl_customizer');