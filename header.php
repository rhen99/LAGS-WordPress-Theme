<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo( "stylesheet_url" );?>">
    <title><?php bloginfo( 'name' );?> | <?php is_front_page() ? bloginfo( 'description' ) : wp_title(); ?></title>
</head>
<?php wp_head(); ?>
<body>
    <nav class="lagsNav" id="lagsNav">
        <div class="branding">
            <h3 class="brand"><a href="#">MY SITE</a></h3>
        </div>
        <div class="hamburger" id="hb">
            <div class="lines"></div>
            <div class="lines"></div>
            <div class="lines"></div>
        </div>
        <div class="searchform">
            <?php get_search_form();?>
        </div>
        <?php wp_nav_menu(array(
            'theme_location' => 'primary'
        )); ?>
    </nav>
    <main class="container">
        <section class="main-content">