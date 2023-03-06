<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
                <?php if(isset($gocargo_option['blog-layout']) and $gocargo_option['blog-layout'] == 2 ){ ?>
                    <div id="sidebar" class="col-md-4"> 
                      <?php get_sidebar();?>
                    </div>
                <?php } ?>
                <div class="<?php if(isset($gocargo_option['blog-layout']) and $gocargo_option['blog-layout'] != 1 ){ echo 'col-md-8'; }else{ echo 'col-md-12'; }?>">
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
                <?php if(isset($gocargo_option['blog-layout']) and $gocargo_option['blog-layout'] == 3 ){ ?>
                    <div id="sidebar" class="col-md-4"> 
                      <?php get_sidebar(); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- content close -->

<?php get_footer(); ?>
