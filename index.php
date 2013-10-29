<!-- Index -->
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php 
 if ( has_post_thumbnail()) {
   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
   echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
   the_post_thumbnail();
   echo '</a>';
 }
 ?>
 <?php the_content('<strong>more..</strong>'); ?>
<hr>
<?php endwhile; else: ?>
<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
