<?php

$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );


$args = array(
	'post_type' => 'sucursales'
);
$sucursales = new WP_Query( $args );

if( $sucursales->have_posts() ):
	$data = [];
while( $sucursales->have_posts() ) : $sucursales->the_post(); 
	$data[] = array(
		'nombre' => get_field('nombre'),
		'ubicacion' => get_field('ubicacion'),
		'telefono' => get_field('telefono')
	); 

endwhile; 
endif; 

echo json_encode($data);