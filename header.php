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
<?php wp_head(); ?>
</head>
<body>
<header>  
	<nav>
		<ul>
			<li class="left"><a href="http://localhost/rodriguezortega">Víctor Rodríguez</a></li>
			<li class="right"><a href="mailto:victor@rodriguezortega.com">victor@rodriguezortega.com</a></li>
		</ul>
	</nav>
	<hgroup>
		<h1><a href="<?php echo get_option('home'); ?>/" class="fade"><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></a></h1>
	</hgroup>
</header>