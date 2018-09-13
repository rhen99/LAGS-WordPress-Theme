<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/all.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    
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
    <div class="showcase">
        <div class="showcase-overlay">
                <div class="showcase-inside">
                    <h1 class="showcase-title"><?php echo get_theme_mod( 'showcase_heading', 'Custom Title'); ?></h1>
                    <p class="showcase-secondary-text"><?php echo get_theme_mod('showcase_secondary', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, totam.'); ?></p>
                    <div class="showcase-button">
                        <a href="<?php echo get_theme_mod('btn_url', 'http://localhost/wordpress/'); ?>">Read More</a>
                    </div>
                    <div class="social-media">
                        <h2>Follow Us</h2>
                        <div class="social-links">

                            <a href="#"><i class="fab fa-facebook-f"></i></a>

                            <a href="#"><i class="fab fa-twitter"></i></a>

                            <a href="#"><i class="fab fa-instagram"></i></a>
                            
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <main class="container">
        <section class="landing-section">
            <div class="introduction">
                    <h1>Introduction</h1>
                    <p class="intro">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora repudiandae voluptates quia delectus rerum numquam corporis. Aut, corporis dolorem laborum ipsam quaerat ex, molestiae labore praesentium deserunt tenetur asperiores repudiandae quo nemo, voluptatibus soluta adipisci magni recusandae quod et illo ratione vitae aperiam esse doloremque? Maiores ut eos omnis eaque!
                    </p>
            </div>
        </section>
    </main>
    <div class="push"></div>
    <footer class="footer">
        <p>&copy; <?php echo Date('Y'); ?> - <strong><?php bloginfo( 'name' ); ?></strong></p>
    </footer>
    <?php wp_footer(); ?>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/animate.js"></script>
</body>
</html>