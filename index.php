<?php get_header(); ?>

<section id="content">

	<h2>Recent posts</h2>

  <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

  <?php query_posts("posts_per_page=5&paged=$paged"); ?>
	
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php post_excerpt(); ?>

  <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>

  <nav class="post_navigation"> 
    <div class="older"> 
		  <?php next_posts_link('Older entries &rarr;'); ?>
		</div>
    <div class="newer">
      <?php previous_posts_link('&larr; Newer entries'); ?>
    </div>
  </nav>

</section>
	
<?php get_footer(); ?>
