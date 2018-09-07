<?php global $post; ?>
<div class="comments">
<h3 class="comment-heading">Comments (<span><?php comments_number();?></span>)</h3>

<?php

 if(comments_open($post->ID)): ?>

    <?php
comment_form(array(
    // change the title of send button 
    'label_submit'=>'Send',
    // change the title of the reply section
    'title_reply'=>'Write a Reply or Comment',
    // remove "Text or HTML to be displayed after the set of comment fields"
    'comment_notes_after' => '',
    // redefine your own textarea (the comment body)
    'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea placeholder="Write your comment here..." id="comment" name="comment" aria-required="true"></textarea></p>',
));

wp_list_comments(array(
	'walker'            => null,
	'max_depth'         => '',
	'style'             => 'ul',
	'callback'          => null,
	'end-callback'      => null,
	'type'              => 'all',
	'reply_text'        => 'Reply',
	'page'              => '',
	'per_page'          => '',
	'avatar_size'       => 30,
	'reverse_top_level' => null,
	'reverse_children'  => '',
	'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
	'short_ping'        => false,   // @since 3.6
        'echo'              => true     // boolean, default is true
), $comments);

?>
<?php else: ?>
<div class="nocomment">
<p><?php _e('Comments are disabled in this post.'); ?></p>
</div>
<?php endif;?>
</div>