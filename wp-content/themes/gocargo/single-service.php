<?php 
/**
 * The template for displaying all single service posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package GoCargo
 */
get_header(); ?>

<!-- content begin -->
<div id="content" class="no-padding">
	<?php while (have_posts()) : the_post()?>
		<?php the_content(); ?>
	<?php endwhile; ?>
</div>
<!-- content close -->
	
<?php get_footer(); ?>