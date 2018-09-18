<?php
function wpl_customizer($wp_customize){
    //Showcase customization.
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

    $wp_customize->add_setting('showcase_overlay', array(
        'default' => '#000',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize, 'showcase_overlay', array(
            'label' => __('Showcase Overlay', 'lagstheme'),
            'section' => 'showcase',
            'settings' => 'showcase_overlay',
            'priority' => 2
        )
    ));

    $wp_customize->add_setting('showcase_heading', array(
        'default' => _x('Custom Title', 'lagstheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
        'label' => __('Heading', 'lagstheme'),
        'section' => 'showcase',
        'priority' => 3
    ));

    $wp_customize->add_setting('showcase_secondary', array(
        'default' => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, totam.', 'lagstheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_secondary', array(
        'label' => __('Secondary', 'lagstheme'),
        'section' => 'showcase',
        'priority' => 4
    ));

    $wp_customize->add_setting('btn_url', array(
        'default' => _x('http://localhost/wordpress/', 'lagstheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
        'label' => __('Button Url', 'lagstheme'),
        'section' => 'showcase',
        'priority' => 5
    ));

    //Social Media Urls Customization
    $wp_customize->add_section('social_media', array(
        'title' => __('Social Media Links', 'lagstheme'),
        'description' => sprintf(__('Showcase Social Media Links', 'lagstheme')),
        'priority' => 31
    ));

    $wp_customize->add_setting('lagstheme_fb_btn', array(
        'sanitize_callback' => 'lagstheme_fb_sanitize_checkbox'
    ));

    $wp_customize->add_control('lagstheme_fb_btn', array(
        'type' => 'checkbox',
        'label' => __('Facebook Link Button', 'lagstheme'),
        'section' => 'social_media',
        'priority' => 1
    ));



    function lagstheme_fb_sanitize_checkbox($checked){
        return ((isset($checked) && true == $checked) ? true : false);
    }

    $wp_customize->add_setting('lagstheme_twitter_btn', array(
        'sanitize_callback' => 'lagstheme_twitter_sanitize_checkbox'
    ));

    $wp_customize->add_control('lagstheme_twitter_btn', array(
        'type' => 'checkbox',
        'label' => __('Twitter Link Button', 'lagstheme'),
        'section' => 'social_media',
        'priority' => 2
    ));

    function lagstheme_twitter_sanitize_checkbox($checked){
        return ((isset($checked) && true == $checked) ? true : false);
    }

    $wp_customize->add_setting('lagstheme_ig_btn', array(
        'sanitize_callback' => 'lagstheme_ig_sanitize_checkbox'
    ));

    $wp_customize->add_control('lagstheme_ig_btn', array(
        'type' => 'checkbox',
        'label' => __('Instagram Link Button', 'lagstheme'),
        'section' => 'social_media',
        'priority' => 3
    ));

    function lagstheme_ig_sanitize_checkbox($checked){
        return ((isset($checked) && true == $checked) ? true : false);
    }

    $wp_customize->add_setting('lagstheme_li_btn', array(
        'sanitize_callback' => 'lagstheme_li_sanitize_checkbox'
    ));

    $wp_customize->add_control('lagstheme_li_btn', array(
        'type' => 'checkbox',
        'label' => __('LinkedIn Link Button', 'lagstheme'),
        'section' => 'social_media',
        'priority' => 3
    ));

    function lagstheme_li_sanitize_checkbox($checked){
        return ((isset($checked) && true == $checked) ? true : false);
    }

    $wp_customize->add_setting('fb_url', array(
        'default' => _x('https://www.facebook.com/', 'lagstheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('fb_url', array(
        'label' => __('Facebook Url', 'lagstheme'),
        'section' => 'social_media',
        'priority' => 4
    ));

    $wp_customize->add_setting('twitter_url', array(
        'default' => _x('https://www.twitter.com/', 'lagstheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('twitter_url', array(
        'label' => __('Twitter Url', 'lagstheme'),
        'section' => 'social_media',
        'priority' => 5
    ));

    $wp_customize->add_setting('ig_url', array(
        'default' => _x('https://www.instagram.com/', 'lagstheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('ig_url', array(
        'label' => __('Instagram Url', 'lagstheme'),
        'section' => 'social_media',
        'priority' => 6
    ));

    $wp_customize->add_setting('li_url', array(
        'default' => _x('https://www.linkedin.com/', 'lagstheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('li_url', array(
        'label' => __('LinkedIn Url', 'lagstheme'),
        'section' => 'social_media',
        'priority' => 7
    ));

    // Intro Customization
    $wp_customize->add_section('intro', array(
        'title' => __('Intro Customization', 'lagstheme'),
        'description' => sprintf(__('For Intro Paragraph', 'lagstheme')),
        'priority' => 32
    ));

    $wp_customize->add_setting('intro_title', array(
        'default' => _x('Introduction', 'lagstheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('intro_title', array(
        'label' => __('Heading', 'lagstheme'),
        'section' => 'intro',
        'priority' => 1
    ));

    $wp_customize->add_setting('intro_paragraph', array(
        'default' => _x('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora repudiandae voluptates quia delectus rerum numquam corporis. Aut, corporis dolorem laborum ipsam quaerat ex, molestiae labore praesentium deserunt tenetur asperiores repudiandae quo nemo, voluptatibus soluta adipisci magni recusandae quod et illo ratione vitae aperiam esse doloremque? Maiores ut eos omnis eaque!', 'lagstheme'),
        'sanitize_callback' => 'into_paragraph_callback'
    ));

    $wp_customize->add_control('intro_paragraph', array(
        'label' => __('Intro Paragraph', 'lagstheme'),
        'type' => 'textarea',
        'section' => 'intro',
        'priority' => 2
    ));

    function into_paragraph_callback($para){
        return _x($para, 'lagstheme');

    }

    $wp_customize->add_section('site_title_section', array(
        'title' => __( 'Site Title', 'lagstheme' ),
        'description' => sprintf(__("For Site Title", 'lagstheme')),
        'priority' => 33
    ));

    $wp_customize->add_setting('site_title', array(
        'default' => _x('MY SITE', 'lagstheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('site_title', array(
        'label' => __('Site Name', 'lagstheme'),
        'section' => 'site_title_section',
        'priority' => 1

    ));





}
add_action('customize_register', 'wpl_customizer');

