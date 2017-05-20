<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
	<title><?php echo bloginfo(); ?></title>
	<?php wp_head(); ?>
</head>
<body>	
<div class="toggle-button">
	<span class="glyphicon glyphicon-menu-hamburger"></span>
</div>
	<center>
		<?php wp_nav_menu(array('theme_location'=>'primary'));?>
	</center>
