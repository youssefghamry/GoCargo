<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package GoCargo
 */
get_header(); ?>

	<!-- content begin -->
    <div id="content">
        <div class="container">
            <div class="row">               	         	
                <div class="col-md-8">
                    <div class="single_post">
                        <?php while ( have_posts() ) : the_post(); ?>
                        	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php 
									the_content(); 

									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;

								 	wp_link_pages(); 
								?>
							</div>
						<?php endwhile; // End of the loop. ?>
                    </div>                    
                </div>

                <div id="sidebar" class="col-md-4">                    
                	<?php get_sidebar();?>
                </div>
            </div>
        </div>
    </div>
    <!-- content close -->

<?php get_footer(); ?>
