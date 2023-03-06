<?php
/**
 * Template Name: Template Blog 2
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
                            $args = array(    
                              'paged' => $paged,
                              'post_type' => 'post',
                              );
                            $wp_query = new WP_Query($args);
                            while ($wp_query -> have_posts()): $wp_query -> the_post();  ?> 
                            <?php $format = get_post_format(); ?>
                            <div class="news-item style-2 item">
                                <?php if($format=='audio'){ $link_audio = get_post_meta(get_the_ID(),'_cmb_link_audio', true); ?>
                                    <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                                        <?php $link_audio = get_post_meta(get_the_ID(),'_cmb_link_audio', true); ?>
                                        <?php if($link_audio){ ?>  
                                            <iframe style="width:100%" src="<?php echo esc_url( $link_audio ); ?>"></iframe>
                                        <?php } ?>
                                    <?php } ?>                
                                <?php } elseif($format=='video'){ $link_video = get_post_meta(get_the_ID(),'_cmb_link_video', true); ?>
                                    <figure class="pic-hover">
                                        <span class="center-xy">
                                            <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                                                <?php $link_video = get_post_meta(get_the_ID(),'_cmb_link_video', true); ?>
                                                <?php if($link_video){ ?>  
                                                    <a class="popup-youtube" href="<?php echo esc_url( $link_video ); ?>"><i class="fa fa-play btn-action btn-play"></i></a>                      
                                                <?php } ?>
                                            <?php } ?> 
                                        </span>        
                                        <span class="bg-overlay"></span>
                                        <?php 
                                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                                the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); 
                                            }
                                        ?>
                                    </figure>           
                                <?php } elseif($format=='gallery'){ ?>
                                    <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                                        <figure class="pic-hover">
                                            <span class="center-xy"></span>            
                                            <span class="bg-overlay"></span>
                                            <?php $images = rwmb_meta( '_cmb_image', "type=image" ); ?>
                                            <?php if($images){ ?>              
                                                <?php  foreach ( $images as $image ) {  ?>
                                                    <?php $img = $image['full_url']; ?>
                                                    <img src="<?php echo esc_url($img); ?>" class="img-responsive" alt="">
                                                <?php } ?>                
                                            <?php }else{
                                                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                                    the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                                                } 
                                            } ?>
                                        </figure>            
                                    <?php } ?>               
                                <?php } elseif ($format=='image'){ ?>
                                    <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                                        <figure class="pic-hover">
                                            <span class="center-xy"></span>            
                                            <span class="bg-overlay"></span>
                                            <?php $images = rwmb_meta( '_cmb_image', "type=image" ); ?>
                                            <?php if($images){ ?>              
                                                <?php  foreach ( $images as $image ) {  ?>
                                                    <?php $img = $image['full_url']; ?>
                                                    <img src="<?php echo esc_url($img); ?>" class="img-responsive" alt="">
                                                <?php } ?>                
                                            <?php }else{
                                                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                                    the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                                                } 
                                            } ?>
                                        </figure>            
                                    <?php } ?>
                                <?php }else{ ?>
                                    <?php 
                                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                            the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                                        }  
                                    ?>
                                <?php } ?>
                            <div class="inner">
                                <div class="date">
                                    <span class="day"><?php the_time('d') ?></span>
                                    <span class="month"><?php the_time('M') ?></span>
                                </div>

                                <div class="desc">
                                    <a href="<?php esc_url(the_permalink()); ?>">
                                        <h4><?php the_title(); ?></h4>
                                    </a>
                                    <?php echo gocargo_excerpt(20); ?>
                                    <br>
                                </div>
                            </div>
                        </div>  
                        <?php endwhile;?> 
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-center ">
                        <?php echo gocargo_pagination(); ?>
                    </div>
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