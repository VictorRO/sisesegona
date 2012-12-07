<article id="post-<?php the_ID(); ?>">
	<hgroup>
		<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    <h3><?php the_author_posts_link() ?>, 
    <?php the_date(); ?>
	  <?php edit_post_link(); ?></h3>
	</hgroup>
	<div class="entry">
	  <?php the_content(__('Continue Reading &#187;')); ?>
    <?php wp_link_pages(); ?>
  </div>
  <div class="tags">
    <?php the_tags(''); ?>
  </div>
  <div class="comments">
    <?php comments_template(); ?>
  </div>
</article>
