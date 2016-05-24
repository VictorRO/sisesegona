<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/es_logo.png" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- Google fonts: Rozha One, PT Sans Narrow and Roboto Slab -->
<link href='http://fonts.googleapis.com/css?family=Rozha+One%7CPT+Sans+Narrow%7CRoboto+Slab:400,300' rel='stylesheet' type='text/css' />
<?php wp_head(); ?>
<script src="<?php bloginfo('template_directory') ?>/js/jquery-1.8.3.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
</head>
<body>
<header>
	<hgroup>
		<h1><!--<img src="<?php bloginfo('template_directory') ?>/img/icon.png" /> --><a id="site-name" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<span><?php bloginfo('description'); ?></span>
	</hgroup>
</header>
