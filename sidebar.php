<?php if ( function_exists('dynamic_sidebar') && is_active_sidebar(1) ) : ?>
<nav class="footer-sidebar">
	<div id="sidebar1" class="sidecol">
		<ul>
<?php dynamic_sidebar(1); ?>
		</ul>
	</div>
<?php endif; ?>
<?php if ( function_exists('dynamic_sidebar') && is_active_sidebar(2) ) : ?>
	<div id="sidebar2" class="sidecol">
		<ul>
<?php dynamic_sidebar(2); ?>
		</ul>
	</div>
</nav>
<?php endif; ?>