<?php $inside_the_loop = true; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php get_template_part('article'); ?>
<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<nav>
  <ul>
    <li class="right"><?php echo previous_posts_link('Entradas nuevas →'); ?></li>
    <li class="left"><?php echo get_next_posts_link('← Entradas antiguas'); ?></li>
  </ul>
</nav>
