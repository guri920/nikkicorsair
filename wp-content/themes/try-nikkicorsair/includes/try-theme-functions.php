<?php

/**
 * Retrieve thumbnail URL
 */
function try_the_portfolio_piece_thumbnail_url( $size = 'small', $color = true ) {
	global $post;
	$color_string = ( $color ) ? 'color' : 'b&w';
	$image_object = get_field('featured_image_' . $color_string );
	
	echo $image_object['sizes']['featured-image-' . $size ];
}