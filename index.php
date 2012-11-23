<?php get_header(); ?>
<section>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>">
		<hgroup>
			<h2 class="font-effect-shadow-multiple"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        	<?php the_author_posts_link() ?>, <time datetime="<?php the_time('Y-M-d'); ?>" pubdate><?php the_time('Y-M-d'); ?></time>
			<p><?php edit_post_link(); ?></p>
		</hgroup>
		<div class="entry">
              <?php the_content(__('Continue Reading &#187;')); ?>
              <?php wp_link_pages(); ?>
      	</div>
        <p class="comments">
        	<?php comments_popup_link(__('No responses yet'), __('One response'), __('% responses')); ?> 
        </p>          
	</article>
<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
	<p><?php posts_nav_link(' - ','&#171; Newer','Older &#187;') ?></p>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>