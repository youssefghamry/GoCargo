<?php 
/**
 * The template for displaying all single career posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package GoCargo
 */
get_header(); ?>

<!-- content begin -->
<div id="content">
    <div class="container">
        <div class="row">

            <div id="sidebar" class="col-md-4">                    
                <?php get_sidebar();?>
            </div>

            <div class="col-md-8">
                <?php while (have_posts()) : the_post()?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>

        </div>
    </div>
</div>
<!-- content close -->
	
<?php get_footer(); ?>