<?php

/**
 * Replaces the main query with portfolio pieces
 */
 function try_replace_main_query( $query ) {
 	if( is_home() && is_main_query() ) {
 		$query->query_vars['numberposts'] = -1;
 		$query->query_vars['order'] = 'ASC';
 		$query->query_vars['orderby'] = 'menu_order';
 		$query->query_vars['post_type'] = 'portfolio-piece';
 	}
 }
 add_action( 'pre_get_posts', 'try_replace_main_query' );