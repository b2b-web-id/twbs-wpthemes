
<!-- Sidebar -->
<div id="secondary" class="widget-area" role="complementary">
<?php do_action( 'before_sidebar' ); ?>
<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
<aside id="archives" class="widget">
<h2 class="widget-title"><?php _e( 'Arsip', 'lifeteen' ); ?></h2>
<ul>
<?php wp_get_archives(); ?>
</ul>
</aside>
<aside id="meta" class="widget">
<h2 class="widget-title"><?php _e( 'Meta', 'lifeteen' ); ?></h2>
<ul>
<?php wp_register(); ?>
<li><?php wp_loginout(); ?></li>
<?php wp_meta(); ?>
</ul>
</aside>
<?php endif; ?>
</div>
<!-- Sidebar -->

