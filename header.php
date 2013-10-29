<!-- Header -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-inner">
<div class="container">
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>
<a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?>, <?php bloginfo('description'); ?></a>
</div>
</div>
</div>
</div>
<div class="navbar navbar-static-top">
<div class="navbar-inner">
<div class="container">
<a class="btn btn-navbar" data-toggle="collapse" data-target=".bottom-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>
<?php
wp_nav_menu(
 array(
	'theme_location'=>'sekunder',
  'container_class'=>'nav-collapse bottom-collapse',
	'menu_class'=>'nav pull-left',
	'depth'=>0,
	'fallback_cb'=>false,
	'walker'=>new Lifeteen_Nav_Walker,
	)); 
?>
<div class="nav-collapse collapse pull-right">
<?php
wp_nav_menu(
 array(
	'theme_location'=>'primer',
  'container_class'=>'nav-collapse top-collapse',
	'menu_class'=>'nav pull-right',
	'depth'=>0,
	'fallback_cb'=>false,
	'walker'=>new Lifeteen_Nav_Walker,
	)); 
?>
</div>
</div>
</div>
<div class="container">
<!-- Header -->

