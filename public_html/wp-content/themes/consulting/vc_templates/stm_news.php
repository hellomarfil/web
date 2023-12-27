<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );

if ( empty( $loop ) ) {
	return;
}

$query = false;

list( $loop_args, $query ) = vc_build_loop_query( $loop, get_the_ID() );

if ( ! $query ) {
	return;
}

if ( ! $img_size ) {
	$img_size = 'consulting-image-350x250-croped';
}

$consulting_config = consulting_config();
?>

<?php if ( $query->have_posts() ): ?>
	<div class="stm_news<?php echo esc_attr( $css_class ); ?>">
		<ul class="news_list posts_per_row_<?php echo esc_attr( $posts_per_row ); ?>">
			<?php while ( $query->have_posts() ): $query->the_post(); ?>
				<li>
					<div class="post_inner">
						<?php if ( has_post_thumbnail() && ! $disable_preview_image ): ?>
							<div class="image">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( $img_size ); ?>
								</a>
							</div>
						<?php endif; ?>
						<h5 class="no_stripe"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

						<?php if( $consulting_config['layout'] == 'layout_2' || $consulting_config['layout'] == 'layout_9' ) : ?>
							<div class="category"><?php echo get_the_category_list(__( ', ', 'consulting' )); ?></div>
						<?php else : ?>
							<div class="date"><?php echo get_the_date(); ?></div>
						<?php endif; ?>
					</div>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
<?php endif;
wp_reset_postdata(); ?>