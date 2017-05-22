<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/screenshot.png" />
	<title><?php echo bloginfo( 'name description' );?></title>
	<?php wp_head(); ?>
</head>
<body>	
<div class="div-menu">
	<div class="responsive-menu">
	<div id="nav-icon3">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
		<?php wp_nav_menu(array('theme_location'=>'primary'));?>
	</div>
	<center class="normal-menu">
		<?php wp_nav_menu(array('theme_location'=>'primary'));?>
	</center>
</div>