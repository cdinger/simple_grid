<?php

function mytheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; 
	?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
  	<div id="comment-<?php comment_ID(); ?>">
      
			<ul class="meta">
      	<li><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a></li>
				<li>by <?php echo get_comment_author_link(); ?>
			</ul>

			<?php if ($comment->comment_approved == '0') : ?>
				<p>Your comment is awaiting moderation.</p>
			<?php endif; ?>
      <p><?php comment_text() ?></p>

      <div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
    </div>
	<?php
	// the closing </li> is provided by wordpress?!
}

function post_excerpt() {
	?>
	<article class="post excerpt">
		<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		<ul class="meta">
			<li>Posted <?php the_time('F jS, Y') ?></li>
			<li>by <?php the_author() ?></li>
			<li><?php comments_popup_link('No comments', '1 comment', '% comments'); ?></li>
		</ul>
		<?php the_excerpt('Read the rest of this entry &raquo;'); ?>
		<p><a href="<?php the_permalink() ?>">Read more</a></p>
		<!--
		<?php the_tags('Tags: ', ', ', '<br />'); ?>
		<?php the_category(', ') ?>
		<?php edit_post_link('Edit', '', ' | '); ?>
		-->
	</article>
	<?php
}

?>
