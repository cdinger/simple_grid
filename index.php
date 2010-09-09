<?php get_header(); ?>

<div id="content">

	<h2>Recent posts</h2>
	
	<?php
		$recent_posts = new WP_Query();
		$recent_posts->query('showposts=5');
	?>
	
	<?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>

		<?php post_excerpt(); ?>

	<?php endwhile; ?>

</div>
	
<?php get_footer(); ?>
