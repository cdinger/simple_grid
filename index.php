<?php get_header(); ?>

<div id="content">

	<h2>Recent posts</h2>

  <? $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

  <?php query_posts("posts_per_page=5&paged=$paged"); ?>
	
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php post_excerpt(); ?>

  <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>

  <div class="post_navigation"> 
    <div class="older"> 
		  <?php next_posts_link('Older entries &rarr;'); ?>
		</div>
    <div class="newer">
      <?php previous_posts_link('&larr; Newer entries'); ?>
    </div>
  </div>

</div>
	
<?php get_footer(); ?>
