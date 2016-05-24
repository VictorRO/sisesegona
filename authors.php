<aside id="author">
	<?php
	$authors = get_users();
	foreach($authors as $author) :
	?>
	<div class="author-meta clearfix">
		<?php echo get_avatar( $author->user_email, $size = '64' ); ?>
		<h1><?php echo $author->first_name . ' ' . $author->last_name; ?></h1>
		<h2><a href="<?php echo get_author_posts_url( $author->ID ); ?>">Artículos</a></h2>
	</div>
	<?php endforeach; ?>
</aside>
