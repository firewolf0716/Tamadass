<?php

	$slug = 'poriechiren';
	$all_terms = get_all_terms_from_top( $slug);
	
	$args = [
        'posts_per_page' => 8,
        'paged'          => 1,
        'post_type' => 'bottle',
        'post_status' => 'publish',
        'orderby'      => 'date',
        'order'        => 'DESC',
        'tax_query' => array(
			array (
				'taxonomy' => 'material',
				'field' => 'slug',
				'terms' => $all_terms
			)
		),     
    ];
    $wp_query = new WP_Query( $args );

?>

<div class="pl_title_box">
	<div class="pl_title">
		<div class="left">
			<p>ポリエチレン容器</p>
		</div>
		<div class="right pc">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
				onclick="event.preventDefault();
                     document.getElementById('<?=$slug?>_list_form').submit();">
				<p>ポリエチレン容器</p>
			</a>

			<form id="<?=$slug?>_list_form" 
	            action="<?php echo esc_url( home_url( '/' ) ); ?>" 
	            method="GET" style="display: none;">
	            <input type="hidden" name="post_type" value="bottle" />
	            <input type="hidden" name="material" value="<?=$slug?>" />
	        </form>
		</div>
	</div>
	<div class="pl_title_line"></div>
</div>

<div class="pl_list_box">

	<?php 

	if ( $wp_query->have_posts() ): ?>

	<?php
	    while ( $wp_query->have_posts() ) : $wp_query->the_post();
	        get_template_part( 'template-parts/front/products', 'item' );
	    endwhile; 
	?>

	<?php wp_reset_postdata(); ?>

	<?php
	else:
	    get_template_part( 'template-parts/front/products', 'none' );
	endif;
	?>

</div>