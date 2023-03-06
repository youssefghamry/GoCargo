<?php
/*
 * Template Name: Template Canvas
 * Description: A Page Template with a Page Builder design.
 */
get_header(); 

    if ( have_posts() ){ 
		while ( have_posts() ) : the_post();
			the_content(); 
		endwhile; 
    } else {
    	esc_html_e( 'Page Canvas For Page Builder', 'gocargo' ); 
    }

get_footer(); ?>