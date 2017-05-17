
<?php

get_header(); 
$entradasArgs = array(
	'post_type' => 'platillos',
	'meta_key'		=> 'categoria',
	'meta_value'	=> 'entradas'
);
$entradas = new WP_Query( $entradasArgs );

 if( $entradas->have_posts() ): ?>
	<ul>
	<?php while( $entradas->have_posts() ) : $entradas->the_post(); ?>
		<li>
			<a href="<?php echo the_permalink(); ?>">
				<img src="<?php echo the_field('imagen'); ?>"  width="100px" height="100px" />
				<?php the_title(); ?>
			</a>
		</li>
	<?php endwhile; ?>
	</ul>
<?php endif;?>
<div>
	<center>
		<h1 class="ti-Line-Cake"></h1>
		<h1 class="ti-Line-Cake"></h1>
	</center>
</div>
<?php
$platoArgs = array(
	'post_type' => 'platillos',
	'meta_key'		=> 'categoria',
	'meta_value'	=> 'plato'
);
$plato = new WP_Query( $platoArgs );

 if( $plato->have_posts() ): ?>
	<ul>
	<?php while( $plato->have_posts() ) : $plato->the_post(); ?>
		<li>
			<a href="<?php echo the_permalink(); ?>">
				<img src="<?php echo the_field('imagen'); ?>"  width="100px" height="100px" />
				<p><?php echo the_field('descripcion'); ?></p>

				<?php echo the_field('nombre'); ?>
			</a>
		</li>
	<?php endwhile; ?>
	</ul>
<?php endif; 

$bebidasArgs = array(
	'post_type' => 'platillos',
	'meta_key'		=> 'categoria',
	'meta_value'	=> 'bebidas'
);
$bebidas = new WP_Query( $bebidasArgs );

 if( $bebidas->have_posts() ): ?>
	<ul>
	<?php while( $bebidas->have_posts() ) : $bebidas->the_post(); ?>
		<li>
			<a href="<?php echo the_permalink(); ?>">
				<img src="<?php echo the_field('imagen'); ?>"  width="100px" height="100px" />
				<?php the_title(); ?>
			</a>
		</li>
	<?php endwhile; ?>
	</ul>
<?php endif; 

$postresArgs = array(
	'post_type' => 'platillos',
	'meta_key'		=> 'categoria',
	'meta_value'	=> 'postres'
);

$postres = new WP_Query( $postresArgs );

 if( $postres->have_posts() ): ?>
	<ul>
	<?php while( $postres->have_posts() ) : $postres->the_post(); ?>
		<li>
			<a href="<?php echo the_permalink(); ?>">
				<img src="<?php echo the_field('imagen'); ?>"  width="100px" height="100px" />
				<?php the_title(); ?>
			</a>
		</li>
	<?php endwhile; ?>
	</ul>
<?php endif; ?>