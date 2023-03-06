<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package GoCargo
 */

global $gocargo_option;
get_header(); ?>

    <!-- content begin -->
    <div id="content">
        <div class="container">
            <div class="row">
                <?php if(isset($gocargo_option['blog-layout']) and $gocargo_option['blog-layout'] == 2 ){ ?>
                    <div id="sidebar" class="col-md-4"> 
                      <?php get_sidebar();?>
                    </div>
                <?php } ?>
                <div class="<?php if(isset($gocargo_option['blog-layout']) and $gocargo_option['blog-layout'] != 1 ){ echo 'col-md-8'; }else{ echo 'col-md-12'; }?>">
                    <?php if ( have_posts() ) : ?> 
                    <div id="newslist" class="news-list row">
                        <?php 
		                    while (have_posts()) : the_post();
		                      	get_template_part( 'content', get_post_format() ) ;   // End the loop.
		                    endwhile;
	                    ?>
                    </div>

                    <div class="clearfix"></div>

                    <div class="text-center ">
                        <?php echo gocargo_pagination(); ?>
                    </div>
                    <?php // If no content, include the "No posts found" template.
                    else : ?>
                        <section class="no-results not-found">                            
                            <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'gocargo' ); ?></h1>
                            
                            <div class="page-content">
                                <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'gocargo' ); ?></p>
                                <div class="widget_search">
                                    <?php get_search_form(); ?>
                                </div>
                            </div><!-- .page-content -->
                        </section><!-- .no-results -->
                    <?php endif; ?>  
                </div>

                <?php if(isset($gocargo_option['blog-layout']) and $gocargo_option['blog-layout'] == 3 ){ ?>
                    <div id="sidebar" class="col-md-4"> 
                      <?php get_sidebar();?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- content close -->

<?php get_footer(); ?>

