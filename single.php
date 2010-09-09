<?php get_header(); ?>

<div id="content">
	
	<?php while (have_posts()) : the_post(); ?>

		<div class="post">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<ul class="meta">
				<li>Posted <?php the_time('F jS, Y') ?></li>
				<li>by <?php the_author() ?></li>
				<li><?php comments_popup_link('No comments', '1 comment', '% comments'); ?></li>
			</ul>
			<?php the_content('Read the rest of this entry &raquo;'); ?>	
		</div>
		
		<?php comments_template(); ?>

	<?php endwhile; ?>
	
</div>
	
<?php get_footer(); ?>