<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p>This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
<div id="comments">

	<?php if ( have_comments() ) : ?>

		<h2><?php comments_number('No comments', '1 comment', '% comments' );?></h2>
		<ol>
		<?php wp_list_comments('callback=mytheme_comment'); ?>
		</ol>
		
	<?php endif; ?>


	<?php if ( comments_open() ) : ?>

		<h3>Comment on this post</h3>

		<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
			
			<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
		
		<?php else : ?>

			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">

			<?php if ( is_user_logged_in() ) : ?>

				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out.</a></p>

			<?php else : ?>

				<label>
					Name <?php if ($req) echo "(required)"; ?>
					<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" />
				</label>
					
				<label>
					E-mail (will not be published) <?php if ($req) echo "(required)"; ?>
					<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" />
				</label>

				<label>
					Website
					<input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
				</label>

			<?php endif; ?>

			<textarea name="comment" tabindex="4"></textarea>
			
			<p class="allowed_tags">You may use these tags: <code><?php echo allowed_tags(); ?></code></p>

			<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
			<?php comment_id_fields(); ?>
			<?php do_action('comment_form', $post->ID); ?>

		</form>

	<?php endif; // If registration required and not logged in ?>
	
	</div>

	<?php endif; // if you delete this the sky will fall on your head ?>
	
</div>