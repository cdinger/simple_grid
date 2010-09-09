<?php get_header(); ?>

<div id="content">
	
	<h2>Archives</h2>
	
	<p>A look back. This page is chronological and categorical summary of everything posted. If you're after something specific, try searching.</p>
	
	<h3>Chronology</h3>
	<ul class="archive">
		<?php wp_get_archives('type=monthly&show_post_count=true'); ?>
	</ul>

	<h3 style="clear:both;padding-top:20px;">Categories</h3>
	<ul class="archive">
		<?php wp_list_categories('title_li=&show_count=true'); ?>
	</ul>
	
	<br style="clear:left;" />
	
</div>

<?php get_footer(); ?>
