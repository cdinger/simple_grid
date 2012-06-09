<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head(); ?>
  <meta charset="utf-8">
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>

<header>
	<?php get_search_form(); ?>
  <h1>
    <a href="<?php echo get_option('home'); ?>/">
      The<br /> <span style="letter-spacing:-.06em;">Ho</span>use<br /> of Ding.
    </a>
  </h1>
	<p><?php bloginfo('description'); ?></p>
  <nav>
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/archives">Archives</a></li>
      <li><a href="/feed">Subscribe</a></li>
      <li><a href="mailto:cdinger@gmail.com">Contact</a></li>
    </ul>
  </nav>
</header>
