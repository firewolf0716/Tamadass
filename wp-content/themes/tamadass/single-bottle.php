<?php get_header(); 

	$figure = get_the_post_thumbnail_url() 
		?:get_theme_file_uri( '/assets/img/front/レイヤー 35 のコピー.jpg' );
?>


	<?php echo get_the_title();?>


	<img src="<?=$figure?>" style="width: 100px;height: 100px;" >
	

<?php get_footer();
