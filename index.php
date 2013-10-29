<?php get_header(); ?>

<!-- Index -->
<div class="row">
<div class="span8">
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
<?php
$pagelist = get_pages('sort_column=menu_order&sort_order=asc');
$pages = array();
foreach ($pagelist as $page) {
   $pages[] += $page->ID;
}
$current = array_search(get_the_ID(), $pages);
$prevID = $pages[$current-1];
$nextID = $pages[$current+1];
?>
<div class="navigation">
<?php if (!empty($prevID)) { ?>
<div class="alignleft">
<a href="<?php echo get_permalink($prevID); ?>"
  title="<?php echo get_the_title($prevID); ?>">Previous</a>
</div>
<?php }
if (!empty($nextID)) { ?>
<div class="alignright">
<a href="<?php echo get_permalink($nextID); ?>" 
 title="<?php echo get_the_title($nextID); ?>">Next</a>
</div>
<?php } ?>
</div>
<!-- Index -->
</div>
<div class="span4">
<?php get_sidebar(); ?>	
</div>
</div>

<?php get_footer(); ?>


