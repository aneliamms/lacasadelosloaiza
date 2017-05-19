<?php get_header(); ?>

<center>
	<h1>
		<?php echo get_the_title(); ?>	
	</h1>
</center>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
			<center>
				<?php echo do_shortcode('[contact-form-7 id="55" title="Formulario Contacto"]'); ?>
			</center>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
			<div id="map-sucursales"></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
