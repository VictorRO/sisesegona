<?php get_header();?>
<div id="wrapper" class="clearfix">
	<section class="clearfix">
		<?php if(have_posts()) : ?>
		  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		  <?php /* If this is a category archive */ if (is_category()) { ?>
		    <h2 class="post-title">
		      Archivo de la categoría '<?php echo single_cat_title(); ?>' 
		    </h2>

		  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		    <h2 class="post-title">
		      Archivo de <?php the_time('j F, Y'); ?>
		    </h2>

		  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		    <h2 class="post-title">
		      Archivo de <?php the_time('F, Y'); ?>
		    </h2>

		  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		    <h2 class="post-title">
		      Archivo de <?php the_time('Y'); ?>
		    </h2>

		  <?php /* If this is a search */ } elseif (is_search()) { ?>
		    <h2 class="post-title">Resultados de búsqueda</h2>

		  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		    <h2 class="post-title">Archivo de Autor</h2>

		  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		    <h2 class="post-title">Archivo del blog</h2>

		  <?php } ?>
		<?php endif; ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		  <?php get_template_part('article'); ?>
		<?php endwhile; else: ?>
		  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

		<?php get_template_part('authors'); ?>
		
		<nav> 
		  <ul>
		    <li class="right"><?php echo previous_posts_link('Entradas nuevas →'); ?></li>
		    <li class="left"><?php echo get_next_posts_link('← Entradas antiguas'); ?></li>
		  </ul>
		</nav>
	</section>
	<?php get_footer();?>
</div>