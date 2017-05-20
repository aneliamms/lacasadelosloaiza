<?php get_header(); ?>

<center>
	<h1>
		<?php echo get_the_title(); ?>	
	</h1>
</center>
<div class="container-fluid">
	<div class="row contact-form">
		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
			<center>
			<h1>Contáctanos</h1>
			<p>Esperamos tu mensaje</p>
				<?php echo do_shortcode('[contact-form-7 id="45" title="Formulario Contacto"]'); ?>
			</center>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
			<center>
			<h1>Sucursales</h1>
				<div id="map-sucursales"></div>
			</center>
		</div>
	</div>
</div>
<?php get_footer(); ?>
