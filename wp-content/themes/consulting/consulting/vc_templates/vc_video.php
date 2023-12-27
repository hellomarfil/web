<?php
global $wp_embed;

$output = $title = $link = $size = $el_class = $image = $img_size = '';
extract( shortcode_atts( array(
	'title' => '',
	'link' => 'http://vimeo.com/92033601',
	'size' => 400,
	'el_class' => '',
	'image' => '',
	'img_size' => 'thumb-540x320',
	'css' => ''

), $atts ) );

if ( $link == '' ) {
	return null;
}

$thumbnail = wpb_getImageBySize( array( 'attach_id' => $image, 'thumb_size' => $img_size ) );

$el_class = $this->getExtraClass( $el_class );

$video_w = $size;
$video_h = $video_w / 1.61; //1.61 golden ratio
$embed = '';
if ( is_object( $wp_embed ) ) {
	$embed = $wp_embed->run_shortcode( '[embed width="' . $video_w . '"' . $video_h . ']' . $link . '[/embed]' );
}
/** @var WP_Embed $wp_embed  */
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_video_widget wpb_content_element' . $el_class . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

if( empty( $thumbnail['thumbnail'] ) ) {
	$css_class .= ' has_no_poster';
}


$output .= "\n\t" . '<div class="' . esc_attr( $css_class ) . '">';
$output .= "\n\t\t" . '<div class="wpb_wrapper">';
$output .= wpb_widget_title( array( 'title' => $title, 'extraclass' => 'wpb_video_heading' ) );
$output .= '<div class="wpb_video_wrapper">';
if( !empty( $thumbnail['thumbnail'] ) ) {
	$output .= $thumbnail['thumbnail'] . '<a href="#" class="play_video"></a>';
	$output .= '<div class="video" style="display: none; width: ' . esc_attr( $video_w ) . 'px; height: ' . esc_attr( $video_h ) . 'px;">' . $embed . '</div>';
}else{
	$output .= '<div class="video" style="width: ' . esc_attr( $video_w ) . 'px; height: ' . esc_attr( $video_h ) . 'px;">' . $embed . '</div>';
}
$output .= '</div>';
$output .= "\n\t\t" . '</div> ' . $this->endBlockComment( '.wpb_wrapper' );
$output .= "\n\t" . '</div> ' . $this->endBlockComment( '.wpb_video_widget' );

echo $output;