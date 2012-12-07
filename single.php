<?php get_header(); ?>
<section>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part('article'); ?>
  <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>
  <p><?php posts_nav_link(' - ','&#171; Newer','Older &#187;') ?></p>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>