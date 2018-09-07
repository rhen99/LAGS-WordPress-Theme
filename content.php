             <?php if(has_post_thumbnail()): ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
             <?php endif;?>
            <h2 class="post-title"><?php the_title(); ?></h2>
            <p class="author">By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author(); ?></a>, <?php the_time('F j, Y g:i a'); ?></p>
            <article class="post-body">
                <?php if(is_single() || is_page()): ?>
                    <?php the_content();?>

                    <?php else: the_excerpt();?>
                    <a href="<?php the_permalink(); ?>" class="permalink">Read More...</a>
                <?php endif;?>    
            </article>
            <?php if(is_single()): ?>
                <div class="comments-section">
                    <?php comments_template(); ?>
                </div>
            <?php endif;