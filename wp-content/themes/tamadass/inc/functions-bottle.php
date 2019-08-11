<?php

function get_all_terms_from_top( $parent_slug, $taxonomy='material' )
{	
	
	$parent_term = get_term_by( 'slug', $parent_slug, $taxonomy );
	$parent_ID = $parent_term->term_id;

	$child_args = [
	    'taxonomy'     => $taxonomy,
	    'parent'        => $parent_ID,
	    'hide_empty'    => false
	];
	$child_terms = get_terms( $child_args );

	$all_terms = array( $parent_slug);
	foreach ($child_terms as $child_term) {
		array_push( $all_terms, $child_term->slug);
	}

	return $all_terms;
}