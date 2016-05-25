<aside id="author">
	<?php
	$author = get_userdata(get_the_author_meta('ID'));
	?>
	<div class="author-meta clearfix">
		<?php echo get_avatar( $author->user_email, $size = '64' ); ?>
		<h1><?php echo $author->first_name . ' ' . $author->last_name; ?></h1>
		<h2><?php echo $author->user_description; ?></h2>
		<ul>
			<li><i class="fi-mail"></i> <?php echo the_author_meta('user_email') ?></li>
			<li><i class="fi-telephone"></i> <?php echo the_author_meta('aim'); ?></li>
		</ul>
	</div>

  <ul class="social">
  	<li><a href="https://twitter.com/_victorrO_" rel="author" target="_blank" class="fi-social-twitter"></a></li>
  	<li><a href="http://es.linkedin.com/in/victorrodriguezortega" rel="author" target="_blank" class="fi-social-linkedin"></a></li>
  	<li><a href="https://github.com/VictorRO" target="_blank" class="fi-social-github"></a></li>
  	<li><a href="http://rodriguezortega.com" class="fi-torso"></a></li>
  </ul>

</aside>
