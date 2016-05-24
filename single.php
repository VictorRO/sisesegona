<?php get_header(); ?>
<div id="wrapper" class="clearfix">
	<section class="clearfix">
	  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	    <?php get_template_part('article'); ?>
			<?php get_template_part('author', get_the_author_meta('user_nicename')); ?>
	  <?php endwhile; else: ?>
	    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	  <?php endif; ?>
	  <nav>
	    <ul>
	      <?php
	      $next_post = get_next_post();
	      if (!empty( $next_post )): ?>
	        <li class="right"><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?> →</a></li>
	      <?php endif; ?>
	      <?php
	      $prev_post = get_previous_post();
	      if (!empty( $prev_post )): ?>
	        <li class="left"><a href="<?php echo get_permalink( $prev_post->ID ); ?>">← <?php echo $prev_post->post_title; ?></a></li>
	      <?php endif; ?>
	    </ul>
	  </nav>
	</section>
	<?php get_footer(); ?>
</div>
