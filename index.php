<?php get_header(); ?>
<div id="main">

<div class="hero-unit">

<h1>Main Area</h1>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<p><?php the_content(__('(more...)')); ?></h1>
<hr><?php endwhile; else: ?>
<p><?php _e(); ?></p>
<?php endif; ?>

</div>

<?php get_sidebar(); ?>

</div>

<div id="delimiter"></div>

<?php get_footer(); ?>
