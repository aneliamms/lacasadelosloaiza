<?php 

$entradasArgs = array(
	'post_type' => 'platillos',
	'meta_key'		=> 'categoria',
	'meta_value'	=> 'entradas'
);
$entradas = new WP_Query( $entradasArgs );

$platoArgs = array(
	'post_type' => 'platillos',
	'meta_key'		=> 'categoria',
	'meta_value'	=> 'plato'
);
$plato = new WP_Query( $platoArgs );

$bebidasArgs = array(
	'post_type' => 'platillos',
	'meta_key'		=> 'categoria',
	'meta_value'	=> 'bebidas'
);
$bebidas = new WP_Query( $bebidasArgs );

$postresArgs = array(
	'post_type' => 'platillos',
	'meta_key'		=> 'categoria',
	'meta_value'	=> 'postres'
);
$postres = new WP_Query( $postresArgs );
