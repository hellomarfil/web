<?php
add_filter('nav_menu_css_class', 'consulting_nav_class', 10, 2);
function consulting_nav_class($classes, $item) {
	// Get post_type for this post
	$post_type = get_query_var('post_type');

	// Removes current_page_parent class from blog menu item
	if ( get_post_type() == $post_type )
		$classes = array_filter($classes, "cunsulting_nav_current_value" );

	// Go to Menus and add a menu class named: {custom-post-type}-menu-item
	// This adds a current_page_parent class to the parent menu item
	if( in_array( $post_type.'-menu-item', $classes ) )
		array_push($classes, 'current_page_parent');

	return $classes;
}

function cunsulting_nav_current_value( $element ) {
	return ( $element != "current_page_parent" );
}

if( ! function_exists( 'consulting_page_id' ) ) {
	function consulting_page_id() {
		$page_ID = get_the_ID();

		if( is_front_page() ) {
			$page_ID = get_option('page_on_front');
		}

		if ( is_home() || is_category() || is_search() || is_tag() || is_tax() ) {
			$page_ID = get_option( 'page_for_posts' );
		}

		return $page_ID;
	}
}

add_filter( 'upload_mimes', 'consulting_custom_mime' );

if ( ! function_exists( 'consulting_custom_mime' ) ) {
	function consulting_custom_mime( $mimes ) {
		$mimes['svg'] = 'image/svg+xml';
		$mimes['ico'] = 'image/icon';

		return $mimes;
	}
}

if ( ! function_exists( 'consulting_comment' ) ) {
	function consulting_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		extract( $args, EXTR_SKIP );

		$rating = '';
		if ( isset( $comment->post_type ) && $comment->post_type == 'product' && get_option( 'woocommerce_enable_review_rating' ) == 'yes' ) {
			$rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );
		}

		if ( 'div' == $args['style'] ) {
			$tag       = 'div';
			$add_below = 'comment';
		} else {
			$tag       = 'li';
			$add_below = 'div-comment';
		}
		?>
		<<?php echo esc_attr( $tag ) ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
		<?php if ( 'div' != $args['style'] ) { ?>
			<div id="div-comment-<?php comment_ID() ?>" class="comment-body clearfix">
		<?php } ?>
		<?php if ( $args['avatar_size'] != 0 ) { ?>
			<div class="vcard">
				<?php echo get_avatar( $comment, 174 ); ?>
			</div>
		<?php } ?>
		<div class="comment-info clearfix">
			<div class="comment-author"><?php echo get_comment_author_link(); ?></div>
			<div class="comment-meta commentmetadata">
				<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
					<?php printf( esc_html__( '%1$s at %2$s', 'consulting' ), get_comment_date(), get_comment_time() ); ?>
				</a>
				<?php if ( $rating ) { ?>
					<div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating"
					     title="<?php echo sprintf( esc_html__( 'Rated %d out of 5', 'consulting' ), $rating ) ?>">
						<span style="width:<?php echo ( $rating / 5 ) * 100; ?>%"><strong
								itemprop="ratingValue"><?php echo esc_html( $rating ); ?></strong> <?php esc_html_e( 'out of 5', 'consulting' ); ?></span>
					</div>
				<?php } ?>
				<?php comment_reply_link( array_merge( $args, array(
					'reply_text' => wp_kses( __( '<i class="fa fa-reply"></i> Reply', 'consulting' ), array( 'i' => array() ) ),
					'add_below'  => $add_below,
					'depth'      => $depth,
					'max_depth'  => $args['max_depth']
				) ) ); ?>
				<?php edit_comment_link( esc_html__( 'Edit', 'consulting' ), '  ', '' ); ?>
			</div>
			<div class="comment-text">
				<?php comment_text(); ?>
			</div>
			<?php if ( $comment->comment_approved == '0' ) { ?>
				<em
					class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'consulting' ); ?></em>
			<?php } ?>
		</div>

		<?php if ( 'div' != $args['style'] ) { ?>
			</div>
		<?php } ?>
		<?php
	}
}

add_filter( 'comment_form_default_fields', 'consulting_comment_form_fields' );

if ( ! function_exists( 'consulting_comment_form_fields' ) ) {
	function consulting_comment_form_fields( $fields ) {
		$commenter = wp_get_current_commenter();
		$req       = get_option( 'require_name_email' );
		$aria_req  = ( $req ? " aria-required='true'" : '' );
		$html5     = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
		$fields    = array(
			'author' => '<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<div class="input-group comment-form-author">
		            			<input placeholder="' . esc_attr__( 'Name', 'consulting' ) . ( $req ? ' *' : '' ) . '" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />
	                        </div>
	                    </div>',
			'email'  => '<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<div class="input-group comment-form-email">
							<input placeholder="' . esc_attr__( 'E-mail', 'consulting' ) . ( $req ? ' *' : '' ) . '" class="form-control" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />
						</div>
					</div>',
			'url'    => '<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<div class="input-group comment-form-url">
							<input placeholder="' . esc_attr__( 'Website', 'consulting' ) . '" class="form-control" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" />
						</div>
					</div></div>'
		);

		return $fields;
	}
}

add_filter( 'comment_form_defaults', 'consulting_comment_form' );

if ( ! function_exists( 'consulting_comment_form' ) ) {
	function consulting_comment_form( $args ) {
		$args['comment_field'] = '<div class="input-group comment-form-comment">
						        <textarea placeholder="' . _x( 'Message', 'noun', 'consulting' ) . ' *" class="form-control" name="comment" rows="9" aria-required="true"></textarea>
							  </div>
							  <div class="input-group">
							    <button type="submit" class="button size-lg icon_left"><i class="fa fa-chevron-right"></i> ' . esc_html__( 'post a comment', 'consulting' ) . '</button>
						    </div>';

		return $args;
	}
}

if ( ! function_exists( 'consulting_move_comment_field_to_bottom' ) ) {
	function consulting_move_comment_field_to_bottom( $fields ) {
		$comment_field = $fields['comment'];
		unset( $fields['comment'] );
		$fields['comment'] = $comment_field;

		return $fields;
	}
}

add_filter( 'comment_form_fields', 'consulting_move_comment_field_to_bottom' );

if ( ! function_exists( 'consulting_wpml_lang_switcher' ) ) {
	function consulting_wpml_lang_switcher() {
		if ( function_exists( 'icl_get_languages' ) ) {
			$languages = icl_get_languages( 'skip_missing=0&orderby=code' );
			$output    = '';
			if ( ! empty( $languages ) ) {
				$output .= '<div id="stm_wpml_lang_switcher">';
				$output .= '<div class="active_language">' . esc_html( ICL_LANGUAGE_NAME_EN ) . ' <i class="fa fa-angle-down"></i></div>';
				$output .= '<ul>';
				foreach ( $languages as $l ) {
					if ( ! $l['active'] ) {
						$output .= '<li>';
						$output .= '<a href="' . esc_url( $l['url'] ) . '">';
						$output .= esc_html( icl_disp_language( $l['native_name'] ) );
						$output .= '</a>';
						$output .= '</li>';
					}
				}
				$output .= '</ul>';
				$output .= '</div>';
				echo $output;
			}
		}
	}
}

if ( ! function_exists( 'consulting_get_header_style' ) ) {
	function consulting_get_header_style() {
		$header_style = get_theme_mod( 'header_style', 'header_style_1' );
		if ( isset( $_REQUEST['header_demo'] ) && $_REQUEST['header_demo'] == 'header_style_1' ) {
			$header_style = 'header_style_1';
		} elseif ( isset( $_REQUEST['header_demo'] ) && $_REQUEST['header_demo'] == 'header_style_2' ) {
			$header_style = 'header_style_2';
		} elseif ( isset( $_REQUEST['header_demo'] ) && $_REQUEST['header_demo'] == 'header_style_3' ) {
			$header_style = 'header_style_3';
		} elseif ( isset( $_REQUEST['header_demo'] ) && $_REQUEST['header_demo'] == 'header_style_4' ) {
			$header_style = 'header_style_4';
		}

		return $header_style;
	}
}

if ( ! function_exists( 'consulting_get_header' ) ) {
	function consulting_get_header() {
		$header = '';
		return get_header( $header );
	}
}

// STM Updater
if ( ! function_exists( 'stm_updater' ) ) {
	function stm_updater() {

		$envato_username = get_theme_mod( 'envato_username' );
		$envato_api_key  = get_theme_mod( 'envato_api' );

		if ( ! empty( $envato_username ) && ! empty( $envato_api_key ) ) {
			$envato_username = trim( $envato_username );
			$envato_api_key  = trim( $envato_api_key );
			if ( ! empty( $envato_username ) && ! empty( $envato_api_key ) ) {
				load_template( get_template_directory() . '/inc/updater/envato-theme-update.php' );

				if ( class_exists( 'Envato_Theme_Updater' ) ) {
					Envato_Theme_Updater::init( $envato_username, $envato_api_key, 'StylemixThemes' );
				}
			}
		}
	}

	add_action( 'after_setup_theme', 'stm_updater' );
}

if ( ! function_exists( 'consulting_get_socials' ) ) {
	function consulting_get_socials( $type = 'header_socials' ) {
		$socials_array  = array();
		$socials_enable = get_theme_mod( $type );
		$socials_enable = explode( ',', $socials_enable );

		$socials        = get_theme_mod( 'socials' );
		$socials_values = array();
		if ( ! empty( $socials ) ) {
			parse_str( $socials, $socials_values );
		}

		if ( $socials_enable ) {
			foreach ( $socials_enable as $social ) {
				if ( ! empty( $socials_values[ $social ] ) ) {
					$socials_array[ $social ] = $socials_values[ $social ];
				}
			}
		}

		return $socials_array;
	}
}

if ( ! function_exists( 'consulting_page_title' ) ) {
	function consulting_page_title( $display = true, $single_posts = '', $vacancies_posts = '' ) {
		global $wp_locale;

		$m        = get_query_var( 'm' );
		$year     = get_query_var( 'year' );
		$monthnum = get_query_var( 'monthnum' );
		$day      = get_query_var( 'day' );
		$search   = get_query_var( 's' );
		$title    = '';


		// If there is a post
		if ( is_single() || ( is_home() && ! is_front_page() ) || ( is_page() && ! is_front_page() ) || is_front_page() ) {
			$title = single_post_title( '', false );
		}

		if ( is_home() ) {
			if ( ! get_option( 'page_for_posts' ) ) {
				$title = $single_posts;
			}
		}

		// If there's a post type archive
		if ( is_post_type_archive() ) {
			$post_type = get_query_var( 'post_type' );
			if ( is_array( $post_type ) ) {
				$post_type = reset( $post_type );
			}
			$post_type_object = get_post_type_object( $post_type );
			if ( ! $post_type_object->has_archive ) {
				$title = post_type_archive_title( '', false );
			}
		}

		// If there's a category or tag
		if ( is_category() || is_tag() ) {
			$title = single_term_title( '', false );
		}

		// If there's a taxonomy
		if ( is_tax() ) {
			$term = get_queried_object();
			if ( $term ) {
				$tax   = get_taxonomy( $term->taxonomy );
				$title = single_term_title( '', false );
			}
		}

		// If there's an author
		if ( is_author() && ! is_post_type_archive() ) {
			$author = get_queried_object();
			if ( $author ) {
				$title = $author->display_name;
			}
		}

		// Post type archives with has_archive should override terms.
		if ( is_post_type_archive() && $post_type_object->has_archive ) {
			if ( function_exists( 'is_shop' ) && is_shop() ) {
				$title = get_the_title( get_option( 'woocommerce_shop_page_id' ) );
			} else {
				$title = post_type_archive_title( '', false );
			}
		}

		// If there's a month
		if ( is_archive() && ! empty( $m ) ) {
			$my_year  = substr( $m, 0, 4 );
			$my_month = $wp_locale->get_month( substr( $m, 4, 2 ) );
			$my_day   = intval( substr( $m, 6, 2 ) );
			$title    = $my_year . ( $my_month ? $my_month : '' ) . ( $my_day ? $my_day : '' );
		}

		// If there's a year
		if ( is_archive() && ! empty( $year ) ) {
			$title = $year;
			if ( ! empty( $monthnum ) ) {
				$title .= ' ' . $wp_locale->get_month( $monthnum );
			}
			if ( ! empty( $day ) ) {
				$title .= ' ' . zeroise( $day, 2 );
			}
		}

		// If it's a search
		if ( is_search() ) {
			/* translators: 1: separator, 2: search phrase */
			$title = esc_html__( 'Search Results', 'consulting' );
		}

		// If it's a 404 page
		if ( is_404() ) {
			$title = esc_html__( 'Page not found', 'consulting' );
		}

		if ( $display ) {
			echo esc_html( $title );
		} else {
			return esc_html( $title );
		}
	}
}

if ( ! function_exists( 'consulting_breadcrumbs' ) ) {
	function consulting_breadcrumbs() {
		if ( function_exists( 'bcn_display' ) && ! get_post_meta( get_the_ID(), 'disable_breadcrumbs', true ) ) { ?>
			<div class="breadcrumbs">
				<?php bcn_display(); ?>
			</div>
		<?php }
	}
}

if ( ! function_exists( 'consulting_substr_text' ) ) {
	function consulting_substr_text( $text = '', $len ) {
		if ( strlen( $text ) > $len ) {
			$text = substr( $text, 0, strpos( $text, ' ', $len ) );
			$text .= '...';
		}

		return $text;
	}
}

if ( ! function_exists( 'consulting_get_structure' ) ) {
	function consulting_get_structure( $sidebar_id, $sidebar_type, $sidebar_position, $layout = false ) {

		$output                   = array();
		$output['content_before'] = $output['content_after'] = $output['sidebar_before'] = $output['sidebar_after'] = '';
		$output['class']          = 'posts_list';

		if ( $layout == 'grid' ) {
			$output['class'] = 'posts_grid';
		}
		if ( ! empty( $_GET['layout'] ) && $_GET['layout'] == 'grid' ) {
			$output['class'] = 'posts_grid';
		}

		if ( $sidebar_type == 'vc' ) {
			if ( $sidebar_id ) {
				$sidebar = get_post( $sidebar_id );
			}
		} else {
			if ( $sidebar_id ) {
				$sidebar = true;
			}
		}

		if ( isset( $sidebar ) ) {
			$output['class'] .= ' with_sidebar';
		}

		if ( $sidebar_position == 'right' && isset( $sidebar ) ) {
			$output['content_before'] .= '<div class="row">';
			$output['content_before'] .= '<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">';
			$output['content_before'] .= '<div class="col_in __padd-right">';

			$output['content_after'] .= '</div>';
			$output['content_after'] .= '</div>'; // col
			$output['sidebar_before'] .= '<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">';
			// .sidebar-area
			$output['sidebar_after'] .= '</div>'; // col
			$output['sidebar_after'] .= '</div>'; // row
		}

		if ( $sidebar_position == 'left' && isset( $sidebar ) ) {
			$output['content_before'] .= '<div class="row">';
			$output['content_before'] .= '<div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12 col-xs-12">';
			$output['content_before'] .= '<div class="col_in __padd-left">';

			$output['content_after'] .= '</div>';
			$output['content_after'] .= '</div>'; // col
			$output['sidebar_before'] .= '<div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 hidden-sm hidden-xs">';
			// .sidebar-area
			$output['sidebar_after'] .= '</div>'; // col
			$output['sidebar_after'] .= '</div>'; // row
		}

		return $output;
	}
}

if ( ! function_exists( 'consulting_blog_layout' ) ) {
	function consulting_blog_layout() {
		$blog_layout = get_theme_mod( 'blog_layout', 'list' );
		if ( isset( $_REQUEST['layout'] ) && $_REQUEST['layout'] == 'grid' ) {
			$blog_layout = 'grid';
		}

		return $blog_layout;
	}
}

if ( ! function_exists( 'consulting_importer_done_function' ) ) {
	function consulting_importer_done_function() {

		$consulting_config = consulting_config();

		global $wp_filesystem;

		if ( empty( $wp_filesystem ) ) {
			require_once ABSPATH . '/wp-admin/includes/file.php';
			WP_Filesystem();
		}

		$locations = get_theme_mod( 'nav_menu_locations' );
		$menus     = wp_get_nav_menus();

		if ( ! empty( $menus ) ) {
			foreach ( $menus as $menu ) {
				if ( is_object( $menu ) ) {
					switch ( $menu->name ) {
						case 'Main Menu':
							$locations['consulting-primary_menu'] = $menu->term_id;
							break;
						case 'Sidebar Menu 1':
							$locations['consulting-sidebar_menu_1'] = $menu->term_id;
							break;
						case 'Sidebar Menu 2':
							$locations['consulting-sidebar_menu_2'] = $menu->term_id;
							break;
						case 'Sidebar Menu 3':
							$locations['consulting-sidebar_menu_3'] = $menu->term_id;
							break;
					}
				}
			}
		}

		set_theme_mod( 'nav_menu_locations', $locations );

		if( $consulting_config['layout'] == 'layout_1' ) {
			set_theme_mod( 'header_style', 'header_style_2' );
		}

		$options_file = get_template_directory() . '/inc/demo/'. $consulting_config['layout'] .'/options.json';
		if ( file_exists( $options_file ) ) {
			$encode_options = $wp_filesystem->get_contents( $options_file );
			$import_options = json_decode( $encode_options, true );
			foreach ( $import_options as $key => $value ) {
				update_option( $key, $value );
			}
		}

		update_option( 'show_on_front', 'page' );

		$front_page = get_page_by_title( 'home' );
		if ( isset( $front_page->ID ) ) {
			update_option( 'page_on_front', $front_page->ID );
		}
		$blog_page = get_page_by_title( 'news' );
		if ( isset( $blog_page->ID ) ) {
			update_option( 'page_for_posts', $blog_page->ID );
		}
		$shop_page = get_page_by_title( 'shop' );
		if ( isset( $shop_page->ID ) ) {
			update_option( 'woocommerce_shop_page_id', $shop_page->ID );
			update_option( 'shop_catalog_image_size[width]', 175 );
			update_option( 'shop_catalog_image_size[height]', 258 );
			update_option( 'shop_single_image_size[width]', 175 );
			update_option( 'shop_single_image_size[height]', 258 );
			update_option( 'shop_thumbnail_image_size[width]', 54 );
			update_option( 'shop_thumbnail_image_size[height]', 79 );
		}
		$checkout_page = get_page_by_title( 'checkout' );
		if ( isset( $checkout_page->ID ) ) {
			update_option( 'woocommerce_checkout_page_id', $checkout_page->ID );
		}
		$cart_page = get_page_by_title( 'cart' );
		if ( isset( $cart_page->ID ) ) {
			update_option( 'woocommerce_cart_page_id', $cart_page->ID );
		}
		$account_page = get_page_by_title( 'my account' );
		if ( isset( $account_page->ID ) ) {
			update_option( 'woocommerce_myaccount_page_id', $account_page->ID );
		}

		$theme_mods_file = get_template_directory() . '/inc/demo/'. $consulting_config['layout'] .'/theme_mods.json';
		if ( file_exists( $theme_mods_file ) ) {
			$encode_theme_mods = $wp_filesystem->get_contents( $theme_mods_file );
			$import_theme_mods = json_decode( $encode_theme_mods, true );
			foreach ( $import_theme_mods as $key => $value ) {
				set_theme_mod( $key, $value );
			}
		}

		$widgets_file = get_template_directory() . '/inc/demo/'. $consulting_config['layout'] .'/widget_data.json';
		if ( file_exists( $widgets_file ) ) {
			$encode_widgets_array = $wp_filesystem->get_contents( $widgets_file );
			consulting_import_widgets( $encode_widgets_array );
		}

		if ( class_exists( 'RevSlider' ) ) {

			$main_slider = get_template_directory() . '/inc/demo/'. $consulting_config['layout'] .'/main_slider.zip';

			if ( file_exists( $main_slider ) ) {
				$slider = new RevSlider();
				$slider->importSliderFromPost( true, true, $main_slider );
			}

			$about_us_slider = get_template_directory() . '/inc/demo/'. $consulting_config['layout'] .'/about_us_slider.zip';

			if ( file_exists( $about_us_slider ) ) {
				$slider = new RevSlider();
				$slider->importSliderFromPost( true, true, $about_us_slider );
			}

			$service_slider = get_template_directory() . '/inc/demo/'. $consulting_config['layout'] .'/service_slider.zip';

			if ( file_exists( $service_slider ) ) {
				$slider = new RevSlider();
				$slider->importSliderFromPost( true, true, $service_slider );
			}

			$fullscreen_main_slider = get_template_directory() . '/inc/demo/'. $consulting_config['layout'] .'/fullscreen_main_slider.zip';

			if ( file_exists( $fullscreen_main_slider ) ) {
				$slider = new RevSlider();
				$slider->importSliderFromPost( true, true, $fullscreen_main_slider );
			}

		}
	}
}

add_action( 'stm_importer_done', 'consulting_importer_done_function' );

if ( ! function_exists( 'consulting_import_widgets' ) ) {
	function consulting_import_widgets( $widget_data ) {
		$json_data = $widget_data;
		$json_data = json_decode( $json_data, true );

		$sidebar_data = $json_data[0];
		$widget_data  = $json_data[1];

		foreach ( $widget_data as $widget_data_title => $widget_data_value ) {
			$widgets[ $widget_data_title ] = '';
			foreach ( $widget_data_value as $widget_data_key => $widget_data_array ) {
				if ( is_int( $widget_data_key ) ) {
					$widgets[ $widget_data_title ][ $widget_data_key ] = 'on';
				}
			}
		}
		unset( $widgets[""] );

		foreach ( $sidebar_data as $title => $sidebar ) {
			$count = count( $sidebar );
			for ( $i = 0; $i < $count; $i ++ ) {
				$widget               = array();
				$widget['type']       = trim( substr( $sidebar[ $i ], 0, strrpos( $sidebar[ $i ], '-' ) ) );
				$widget['type-index'] = trim( substr( $sidebar[ $i ], strrpos( $sidebar[ $i ], '-' ) + 1 ) );
				if ( ! isset( $widgets[ $widget['type'] ][ $widget['type-index'] ] ) ) {
					unset( $sidebar_data[ $title ][ $i ] );
				}
			}
			$sidebar_data[ $title ] = array_values( $sidebar_data[ $title ] );
		}

		foreach ( $widgets as $widget_title => $widget_value ) {
			foreach ( $widget_value as $widget_key => $widget_value ) {
				$widgets[ $widget_title ][ $widget_key ] = $widget_data[ $widget_title ][ $widget_key ];
			}
		}

		$sidebar_data = array( array_filter( $sidebar_data ), $widgets );

		consulting_widget_parse_import_data( $sidebar_data );
	}
}

if ( ! function_exists( 'consulting_widget_parse_import_data' ) ) {
	function consulting_widget_parse_import_data( $import_array ) {
		global $wp_registered_sidebars;
		$sidebars_data    = $import_array[0];
		$widget_data      = $import_array[1];
		$current_sidebars = get_option( 'sidebars_widgets' );
		$new_widgets      = array();

		foreach ( $sidebars_data as $import_sidebar => $import_widgets ) :

			foreach ( $import_widgets as $import_widget ) :
				//if the sidebar exists
				if ( isset( $wp_registered_sidebars[ $import_sidebar ] ) ) :
					$title               = trim( substr( $import_widget, 0, strrpos( $import_widget, '-' ) ) );
					$index               = trim( substr( $import_widget, strrpos( $import_widget, '-' ) + 1 ) );
					$current_widget_data = get_option( 'widget_' . $title );
					$new_widget_name     = consulting_get_new_widget_name( $title, $index );
					$new_index           = trim( substr( $new_widget_name, strrpos( $new_widget_name, '-' ) + 1 ) );

					if ( ! empty( $new_widgets[ $title ] ) && is_array( $new_widgets[ $title ] ) ) {
						while ( array_key_exists( $new_index, $new_widgets[ $title ] ) ) {
							$new_index ++;
						}
					}
					$current_sidebars[ $import_sidebar ][] = $title . '-' . $new_index;
					if ( array_key_exists( $title, $new_widgets ) ) {
						$new_widgets[ $title ][ $new_index ] = $widget_data[ $title ][ $index ];
						$multiwidget                         = $new_widgets[ $title ]['_multiwidget'];
						unset( $new_widgets[ $title ]['_multiwidget'] );
						$new_widgets[ $title ]['_multiwidget'] = $multiwidget;
					} else {
						$current_widget_data[ $new_index ] = $widget_data[ $title ][ $index ];
						$current_multiwidget               = isset( $current_widget_data['_multiwidget'] ) ? $current_widget_data['_multiwidget'] : false;
						$new_multiwidget                   = isset( $widget_data[ $title ]['_multiwidget'] ) ? $widget_data[ $title ]['_multiwidget'] : false;
						$multiwidget                       = ( $current_multiwidget != $new_multiwidget ) ? $current_multiwidget : 1;
						unset( $current_widget_data['_multiwidget'] );
						$current_widget_data['_multiwidget'] = $multiwidget;
						$new_widgets[ $title ]               = $current_widget_data;
					}

				endif;
			endforeach;
		endforeach;

		if ( isset( $new_widgets ) && isset( $current_sidebars ) ) {
			update_option( 'sidebars_widgets', $current_sidebars );

			foreach ( $new_widgets as $title => $content ) {
				update_option( 'widget_' . $title, $content );
			}

			return true;
		}

		return false;
	}
}

if ( ! function_exists( 'consulting_get_new_widget_name' ) ) {
	function consulting_get_new_widget_name( $widget_name, $widget_index ) {
		$current_sidebars = get_option( 'sidebars_widgets' );
		$all_widget_array = array();
		foreach ( $current_sidebars as $sidebar => $widgets ) {
			if ( ! empty( $widgets ) && is_array( $widgets ) && $sidebar != 'wp_inactive_widgets' ) {
				foreach ( $widgets as $widget ) {
					$all_widget_array[] = $widget;
				}
			}
		}
		while ( in_array( $widget_name . '-' . $widget_index, $all_widget_array ) ) {
			$widget_index ++;
		}
		$new_widget_name = $widget_name . '-' . $widget_index;

		return $new_widget_name;
	}
}

add_action('after_switch_theme', 'consulting_setup_options');

if( ! function_exists( 'consulting_setup_options' ) ){
	function consulting_setup_options () {

		$consulting_config = consulting_config();

		global $wp_filesystem;

		if ( empty( $wp_filesystem ) ) {
			require_once ABSPATH . '/wp-admin/includes/file.php';
			WP_Filesystem();
		}

		$options_file = get_template_directory() . '/inc/demo/'. $consulting_config['layout'] .'/options.json';
		if ( file_exists( $options_file ) ) {
			$encode_options = $wp_filesystem->get_contents( $options_file );
			$import_options = json_decode( $encode_options, true );
			foreach ( $import_options as $key => $value ) {
				update_option( $key, $value );
			}
		}
	}
}

if ( ! function_exists( 'consulting_sass_config' ) ) {
	function consulting_sass_config( $defaults ) {
		return array(
			'variables' => array( get_template_directory_uri() . '/assets/scss/site/_base_variables.scss' ),
			'imports'   => array( get_template_directory_uri() . '/style.scss' )
		);
	}
}

add_filter( 'sass_configuration', 'consulting_sass_config' );

if( ! function_exists( 'consulting_hex2rgba' ) ){
	function consulting_hex2rgba($color, $opacity = false) {

		$default = 'rgb(0,0,0)';

		if(empty($color))
			return $default;

		if ($color[0] == '#' ) {
			$color = substr( $color, 1 );
		}

		if (strlen($color) == 6) {
			$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
		} elseif ( strlen( $color ) == 3 ) {
			$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
		} else {
			return $default;
		}

		$rgb =  array_map('hexdec', $hex);

		if($opacity){
			if(abs($opacity) > 1)
				$opacity = 1.0;
			$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
		} else {
			$output = 'rgb('.implode(",",$rgb).')';
		}

		return $output;
	}
}

if ( ! function_exists( 'consulting_get_top_bar_info' ) ) {
	function consulting_get_top_bar_info() {
		$top_bar_info = array();
		for ( $i = 1; $i <= 10; $i ++ ) {
			$top_bar_info_office = get_theme_mod( 'top_bar_info_' . $i . '_office' );
			if ( ! empty( $top_bar_info_office ) ) {
				$top_bar_info[ $i ]['office'] = $top_bar_info_office;
			}
			$top_bar_info_address = get_theme_mod( 'top_bar_info_' . $i . '_address' );
			if ( ! empty( $top_bar_info_address ) && ! empty( $top_bar_info_office ) ) {
				$top_bar_info[ $i ]['address'] = $top_bar_info_address;
			}
			$top_bar_info_address_icon = get_theme_mod( 'top_bar_info_' . $i . '_address_icon', 'stm-marker' );
			if ( ! empty( $top_bar_info_address ) && ! empty( $top_bar_info_address_icon ) && ! empty( $top_bar_info_office ) ) {
				$top_bar_info[ $i ]['address_icon'] = $top_bar_info_address_icon;
			}
			$top_bar_info_hours = get_theme_mod( 'top_bar_info_' . $i . '_hours' );
			if ( ! empty( $top_bar_info_hours ) && ! empty( $top_bar_info_office ) ) {
				$top_bar_info[ $i ]['hours'] = $top_bar_info_hours;
			}
			$top_bar_info_hours_icon = get_theme_mod( 'top_bar_info_' . $i . '_hours_icon', 'fa fa-clock-o' );
			if ( ! empty( $top_bar_info_hours ) && ! empty( $top_bar_info_hours_icon ) && ! empty( $top_bar_info_office ) ) {
				$top_bar_info[ $i ]['hours_icon'] = $top_bar_info_hours_icon;
			}
			$top_bar_info_phone = get_theme_mod( 'top_bar_info_' . $i . '_phone' );
			if ( ! empty( $top_bar_info_phone ) && ! empty( $top_bar_info_office ) ) {
				$top_bar_info[ $i ]['phone'] = $top_bar_info_phone;
			}
			$top_bar_info_phone_icon = get_theme_mod( 'top_bar_info_' . $i . '_phone_icon', 'fa fa-phone' );
			if ( ! empty( $top_bar_info_phone ) && ! empty( $top_bar_info_phone_icon ) && ! empty( $top_bar_info_office ) ) {
				$top_bar_info[ $i ]['phone_icon'] = $top_bar_info_phone_icon;
			}
		}

		return $top_bar_info;
	}
}

if( ! function_exists( 'stm_get_image_id' ) ) {
	function stm_get_image_id( $url ) {
		global $wpdb;

		$dir = wp_upload_dir();
		$path = $url;

		if ( 0 === strpos( $path, $dir['baseurl'] . '/' ) ) {
			$path = substr( $path, strlen( $dir['baseurl'] . '/' ) );
		}

		$sql = $wpdb->prepare(
			"SELECT post_id FROM $wpdb->postmeta WHERE meta_key = '_wp_attached_file' AND meta_value = %s",
			$path
		);
		$post_id = $wpdb->get_var( $sql );
		if ( ! empty( $post_id ) ) {
			return (int) $post_id;
		}
	}
}