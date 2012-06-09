<?php get_header(); ?>

<section id="content">

	<?php if (have_posts()) : ?>

		<h2>Posts containing &lsquo;<?php echo $_GET['s']; ?>&rsquo;</h2>

		<?php while (have_posts()) : the_post(); ?>
		
			<?php post_excerpt(); ?>
			
		<?php endwhile; ?>

		<nav class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</nav>

	<?php else : ?>

		<h2>No posts found</h2>
		<p>No posts matched your search criteria. Search again or try browing the <a href="/archives">archives</a>.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

</section>

<?php get_footer(); ?>
