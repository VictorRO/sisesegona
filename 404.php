<?php get_header();?>
<div id="wrapper" class="clearfix">
	<section class="clearfix">
	  <article>
	    <hgroup>
	      <h2 class="title">404 - Sigue buscando!</h2>
	    </hgroup>
	    <div class="entry">
	      <p>El artículo o página que estás buscando no está disponible.
	        Puede que haya sido borrado o haya cambiado su URL.</p>
				<img src="<?php bloginfo('template_directory') ?>/img/404-guiru.png" />
		    <p><?php echo date('j \d\e F, Y'); ?></p>
	    </div>
	  </article>
	</section>
	<?php get_footer();?>
</div>
