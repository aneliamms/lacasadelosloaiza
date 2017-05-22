<?php 
	get_header(); 
	$page = get_page_by_title(  get_the_title() ); 
?>

<center>
	<h1>
		<?php echo get_the_title(); ?>	
	</h1>
</center>
<div class="container-fluid">
	<div class="historia">
	<?php echo $page->post_content;?>
	</div>
</div>

<?php get_footer(); ?>
