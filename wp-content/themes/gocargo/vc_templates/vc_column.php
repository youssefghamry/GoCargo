<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $width
 * @var $css
 * @var $offset
 * @var $content - shortcode content
 * @var $duration
 * @var $delay
 * @var $animate
 * @var $column_innerclass
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Column
 */
$el_class = $width = $css = $offset = $animate = $duration = $delay = $column_innerclass = '';
$output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$col_animate = '';
if($animate == 'none'){
	$col_animate = '';
}elseif ($animate == 'fadeinup') {
	$col_animate = 'wow fadeInUp';
}elseif ($animate == 'fadeindown') {
	$col_animate = 'wow fadeInDown';
}elseif ($animate == 'fadein') {
	$col_animate = 'wow fadeIn';
}elseif ($animate == 'fadeinleft') {
	$col_animate = 'wow fadeInLeft';
}else{
	$col_animate = 'wow fadeInRight';
}

$duration1 = (!empty($duration) ? 'data-wow-duration="'.esc_attr($duration).'s"' : '');
$delay1 = (!empty($delay) ? 'data-wow-delay="'.esc_attr($delay).'s"' : '');

$width = wpb_translateColumnWidthToSpan( $width );
$width = vc_column_offset_class_merge( $offset, $width );

$css_classes = array(
	$this->getExtraClass( $el_class ),
	'wpb_column',
	'vc_column_container',
	$width,
);

if (vc_shortcode_custom_css_has_property( $css, array('border', 'background') )) {
	$css_classes[]='vc_col-has-fill';
}

$wrapper_attributes = array();

$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';

$output .= '<div ' . implode( ' ', $wrapper_attributes ) . '>';
$output .= '<div class="vc_column-inner ' . esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ) . '">';
$output .= '<div class="wpb_wrapper ' . esc_attr( $col_animate ) . ' ' . esc_attr($column_innerclass) . '" '.$delay1.' '.$duration1.'>';
$output .= wpb_js_remove_wpautop( $content );
$output .= '</div>';
$output .= '</div>';
$output .= '</div>';

echo $output;

