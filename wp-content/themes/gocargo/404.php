<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package GoCargo
 */

get_header(); ?>

	<!-- content begin -->
	<div id="content">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-offset-2 col-md-8">
	               	<p class="title_404 text-center"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'gocargo' ); ?></p>
					<br>
					<div class="content_404 center widget_search">
						<?php get_search_form(); ?>
						<div class="clearfix"></div>
						<br>
					</div>
					<div class="text-center"><a class="btn-custom btn-big" href="<?php echo esc_url(home_url('/')); ?>"><i class="fa fa-arrow-circle-left"></i> <?php esc_html_e( 'Back To Home', 'gocargo' ); ?></a></div> 
	            </div>           
	            
	        </div>
	    </div>
	</div>
	<!-- content close -->
<?php get_footer(); ?>