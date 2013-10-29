<?php get_header(); ?>


	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p><em><?php the_time(); ?></em></p>
		<hr>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>


<?php get_footer(); ?>
