<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta charset="<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/icon.png" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,700' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<script src="<?php bloginfo('template_directory') ?>/js/jquery-1.8.3.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
</head>
<body>
<header>  
	<hgroup class="left">
		<h1><img src="<?php bloginfo('template_directory') ?>/img/icon.png" /> <a id="site-name" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<span><?php bloginfo('description'); ?></span>
	</hgroup>  
  <div class="right">
    <ul class="social">
    	<li class="right"><a href="<?php bloginfo('rss2_url'); ?>" class="fi-rss"></a></li>
    	<li class="right"><a href="https://twitter.com/_VictorRO_" rel="author" target="_blank" class="fi-social-twitter"></a></li>
    	<li class="right"><a href="http://es.linkedin.com/in/victorrodriguezortega" rel="author" target="_blank" class="fi-social-linkedin"></a></li>
    	<li class="right"><a href="https://github.com/VictorRO" target="_blank" class="fi-social-github"></a></li>
    	<li class="right"><a href="http://rodriguezortega.com" class="fi-torso"></a></li>
    </ul>
  </div>
</header>