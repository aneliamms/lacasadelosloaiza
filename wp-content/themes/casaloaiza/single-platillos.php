<?php get_header(); ?>

<div>
	<center>
		<div class="plate">
			<img src="<?php echo get_field('imagen')?>"/>
			<h1><?php echo get_field('nombre')?></h1>
			<p><?php echo get_field('descripcion')?></p>
		</div>
	<center>
</div>

<?php get_footer(); ?>

