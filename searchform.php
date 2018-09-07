<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"><?php _e('Search'); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php is_search() ? the_search_query() : esc_attr_e('Search'); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e('&#128270;'); ?>" />
	</form>