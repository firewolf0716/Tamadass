<?php get_header(); 

$post_type = $_GET['post_type'] ?: 'bottle';
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = [
    'posts_per_page' => 8,
    'paged'          => $paged,
    'post_type' => $post_type,
    'post_status' => 'publish',
    'tax_query' => array(),  
]; 

$material = $_GET['material'] ?: '';
if ($material) :
    $all_terms = get_all_terms_from_top( $material);
    $args['tax_query'][] = array (
            'taxonomy' => 'material',
            'field' => 'slug',
            'terms' => $all_terms
        );
endif;
    
$search_query = new WP_Query( $args );

if ( $search_query->have_posts() ): ?>

<?php
    while ( $search_query->have_posts() ) : $search_query->the_post();
        get_template_part( 'template-parts/front/products', 'bottle' );
    endwhile; 
?>

<?php wp_reset_postdata(); ?>

    <div class="paging">
        <?php tamadass_pagination($search_query->max_num_pages); ?>  
    </div>
    
<?php

else:
    get_template_part( 'template-parts/front/products', 'none' );
endif;

?>

</div>

<?php get_footer();
