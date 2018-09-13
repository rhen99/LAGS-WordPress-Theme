<?php 
function wpl_theme_setup(){
    register_nav_menus(
        array(
            'primary' => __("Primary Menu")

        ));

    add_theme_support('post-thumbnails');
    add_theme_support( 'post-formats', array('aside', 'gallery') );

}
function get_top_ancestor_id(){
    global $post;

    if($post->post_parent){
        $ancestor = array_reverse(get_post_ancestors( $post->ID ));
        return $ancestor[0];
    }else{
        return $post->ID;
    }
}
add_action('after_setup_theme', 'wpl_theme_setup');

function wpl_widgets_init($id){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'wpl_widgets_init');

require get_template_directory(). '/inc/customizer.php';
require get_template_directory(). '/thememod/head.php';