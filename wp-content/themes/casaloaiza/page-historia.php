<?php get_header(); ?>

<center>
	<h1>
		<?php echo get_the_title(); ?>	
	</h1>
</center>

<?php 
$page = get_page_by_title(  get_the_title() ); 

echo $page->post_content;


?>

<?php get_footer(); ?>
