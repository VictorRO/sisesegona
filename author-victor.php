<aside id="author" style="position: rleative; ">

	<?php
	$author = get_userdata(get_the_author_meta('ID'));
	?>
	<div class="author-meta clearfix">
		<?php echo get_avatar( $author->user_email, $size = '64' ); ?>
		<h1>The author</h1>
		<h2><?php echo $author->first_name . ' ' . $author->last_name; ?></h2>
	</div>
	
	<div class="small">
		<p><?php echo $author->user_description; ?></p>
	</div>
	
  <ul class="social">
  	<li><a href="https://twitter.com/_victorrO_" rel="author" target="_blank" class="fi-social-twitter"> <span class="small">twitter.com/_victorro_</span></a></li>
  	<li><a href="http://es.linkedin.com/in/victorrodriguezortega" rel="author" target="_blank" class="fi-social-linkedin"> <span class="small">linkedin.com/in/victorro...</span></a></li>
  	<li><a href="https://github.com/VictorRO" target="_blank" class="fi-social-github"> <span class="small">github.com/VictorRO</span></a></li>
  	<li><a href="http://rodriguezortega.com" class="fi-torso"> <span class="small">rodriguezortega.com</span></a></li>
  </ul>

</aside>