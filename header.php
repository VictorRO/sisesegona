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
<link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>
<body>
<header>  
	<hgroup>
		<h1><a href="<?php echo get_option('home'); ?>/" class="fade"><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></a></h1>
		<nav>
    		<ul>
    			<li>Por <a href="http://rodriguezortega.com" rel="author">Víctor Rodríguez</a> - <?php bloginfo('description'); ?></li>
    			<li class="right entypo"><a href="<?php bloginfo('rss2_url'); ?>">&#59194;</a></li>
    			<li class="right social"><a href="https://twitter.com/_VictorRO_" rel="author" target="_blank">&#62217;</a></li>
    			<li class="right social"><a href="http://es.linkedin.com/in/victorrodriguezortega" rel="author" target="_blank">&#62232;</a></li>
    		</ul>
    	</nav>
	</hgroup>
</header>