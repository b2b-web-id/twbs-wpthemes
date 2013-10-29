<?php get_header(); ?>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<?php the_content(__('(more...)')); ?>
<?php endwhile; else: ?>
<p><?php _e('Maaf, halaman yang Anda tuju tidak ada..'); ?></p>
<?php endif; ?>

</div>

<?php get_footer(); ?>
