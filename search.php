<?php get_header();?>
    <?php if(have_posts()): ?>
    <h2 class="query">Search results for: "<span><?php the_search_query(); ?></span>"</h2>
        <?php while(have_posts()) : the_post();?>
            <?php get_template_part('content', get_post_format()); ?>
        <?php endwhile;?>
        <?php else: ?>
        <p><?php __('No Post Found.'); ?></p>
    <?php endif;?>
       <?php get_footer(); ?>