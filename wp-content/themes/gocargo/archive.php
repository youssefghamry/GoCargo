<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package GoCargo
 */
global $gocargo_option;
get_header(); ?>

    <!-- content begin -->
    <div id="content">
        <div class="container">
            <div class="row">
                <?php if ( isset($gocargo_option['blog-layout'] ) and $gocargo_option['blog-layout'] == 2 ){ ?>
                    <div id="sidebar" class="col-md-4"> 
                      <?php get_sidebar();?>
                    </div>
                <?php } ?>

                <div class="<?php if( isset( $gocargo_option['blog-layout'] ) and $gocargo_option['blog-layout'] != 1 ){ echo 'col-md-8'; } else { echo 'col-md-12'; }?>">
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
                </div>

                <?php if ( isset( $gocargo_option['blog-layout'] ) and $gocargo_option['blog-layout'] == 3 ) { ?>
                    <div id="sidebar" class="col-md-4"> 
                      <?php get_sidebar();?>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <!-- content close -->

<?php get_footer(); ?>

