<?php
if ( ! function_exists( 'gocargo_page_header' ) ) {
    function gocargo_page_header() {        
        global $gocargo_option;
        $pheader = '';
        if ( is_page() ) {
            if ( function_exists('rwmb_meta') ) {
                $pheader = rwmb_meta('_cmb_pheader_switch');
                if( ! $pheader ) {
                    return;
                }
            }
        } 
        if( $gocargo_option['subpage-switch'] == false && ! $pheader ){
            return;
        } else {
            $bg         = '';
            $title      = '';
            $subtitle   = '';
            $output     = array();

            if ( is_home() ) {
                $title = get_the_title(get_option('page_for_posts'));
            } elseif ( is_search() ) {
                $title = esc_html__('Search Results for: ', 'gocargo') . get_search_query();
            } elseif ( is_archive() ) {
                $title = get_the_archive_title();
            } else {
                $title = get_the_title();
            }
            
            if ( function_exists( 'rwmb_meta' ) ) {
                if ( is_page() || is_singular( array( 'service', 'post', 'career' ) ) ) {
                    $images = rwmb_meta('_cmb_subheader_image', "type=image"); 
                    if ( $images != '' ) {
                        foreach ( $images as $image ) {
                            $bg = $image['full_url'];
                            break;
                        }
                    } else {
                        $bg = $gocargo_option['bg_allpage']['url']; 
                    }   
                    $subtitle = rwmb_meta('_cmb_page_subtitle', "type=textarea");                
                }                     
            } else {
                $bg = $gocargo_option['bg_allpage']['url']; 
            }            

            if ( $title ) {
                $output[] = sprintf( '%s', $title );
            }

        ?>        
            <!-- subheader begin -->
            <section id="subheader" data-stellar-background-ratio="0.5" <?php if($bg) { ?> style="background-image: url(<?php echo esc_url($bg); ?>);" <?php } ?>>
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <?php if ( $gocargo_option['subheader_layout'] != 'subheader2' ) { ?>
                                    <h1>
                                        <?php echo implode( '', $output ); ?>
                                        <?php if ( $subtitle != '' ){ ?> <span><?php echo esc_attr( $subtitle ); ?></span><?php } ?> 
                                    </h1>
                                    <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s"></div>
                                <?php }else{ ?>
                                    <h1 class="page-title"><?php echo implode( '', $output ); ?></h1>
                                    <div class="crumb">
                                        <div class="deco">
                                            <?php echo gocargo_breadcrumbs(); ?>
                                        </div>
                                    </div>                        
                                <?php } ?>  
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- subheader close -->

            <div class="clearfix"></div>
        <?php
        }
    }
}