<aside id="author">
	<?php
	$author = get_userdata(get_the_author_meta('ID'));
	?>
	<div class="author-meta clearfix">
		<?php echo get_avatar( $author->user_email, $size = '64' ); ?>
		<h1><?php echo $author->first_name . ' ' . $author->last_name; ?></h1>
		<h2><?php echo $author->user_description; ?></h2>
		<ul>
			<li><?php echo the_author_meta('user_email') ?></li>
			<li><?php echo the_author_meta('aim'); ?></li>
		</ul>
	</div>

</aside>
