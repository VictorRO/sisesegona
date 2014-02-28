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

</aside>