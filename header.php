<?php echo '<?xml version="1.1" encoding="UTF-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head profile="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#switch").click(function () {
				if ($('#header').css('border-bottom-width') != '0px') 
					$("#header").css({'border-bottom-width' : '0'});
				else
					$("#header").css({'border-bottom-width' : '1px'});
				return false;
			});
			$("#show_hide_grid").click(function() {
				if ($("body").css('background-image') == 'none')				
					$("body").css({'background-image' : 'url(<?php bloginfo('stylesheet_directory') ?>/img/grid_700.png)'});
				else
					$("body").css({'background-image' : ''});
				return false;
			});
			$("form.search input").focus(function() {
				$(this).css({'color' : '#000'}).val('');
			});
			$("form.search input").blur(function() {
				if ($(this).val != '')
					$(this).css({'color' : '#ccc'}).val('Search');
			});
		});
	</script>
</head>
<body>

<div id="header">
	<?php get_search_form(); ?>
	<h1><a href="<?php echo get_option('home'); ?>/">The<br /> House<br /> of Ding.</a></h1>
	<p><?php bloginfo('description'); ?></p>
	<ul>
		<li><a href="/">Home</a></li>
		<li><a href="/archives">Archives</a></li>
		<li><a href="/feed">Subscribe</a></li>
		<li><a href="mailto:cdinger@gmail.com">Contact</a></li>
	</ul>
</div>
