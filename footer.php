        </section>
        <aside class="sidebar">
            <?php if(is_active_sidebar('sidebar')):?>
                <?php dynamic_sidebar('sidebar'); ?>
            <?php endif;?>
        </aside>
    </main>
    <div class="push"></div>
    <footer class="footer">
        <p>&copy; <?php echo Date('Y'); ?> - <strong><?php bloginfo( 'name' ); ?></strong></p>

        
    </footer>
    <?php wp_footer(); ?>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/animate.js"></script>
</body>
</html>