<?php get_header();?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()) : the_post();?>
            <div class="subpages">
                <a class="parent-page" href="<?php echo get_the_permalink(get_top_ancestor_id()) ?>"><?php echo get_the_title(get_top_ancestor_id()); ?>:</a>
            <?php wp_list_pages(array(
            'child_of' => get_top_ancestor_id(),
            'title_li' => ''
        )); ?>
            </div>
            <?php get_template_part('content', get_post_format()); ?>
        <?php endwhile;?>
        <?php else: ?>
        <p><?php __('No Page Found.'); ?></p>
    <?php endif;?>
       <?php get_footer(); ?>