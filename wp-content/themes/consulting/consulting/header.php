<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div id="wrapper">
	<div class="content_wrapper">
		<?php if( ! is_404() ): ?>
			<?php
				$consulting_config = consulting_config();
				$logo_tmp_src = '';
				if( !empty( $consulting_config['layout'] ) && $consulting_config['layout'] != 'layout_1' && $consulting_config['layout'] != 'layout_12' ) {
					$logo_tmp_src = $consulting_config['layout'] . '/';
				}
				$wc_cart_hide = get_theme_mod( 'wc_cart_hide', false );
				$wc_topbar_cart_hide = get_theme_mod( 'wc_topbar_cart_hide', false );
			?>
			<header id="header">
				<?php if ( empty( $_GET['hide_top_bar'] ) ): ?>
					<?php if ( get_theme_mod( 'top_bar', true ) ): ?>
						<div class="top_bar">
							<div class="container">
								<?php if( consulting_get_header_style() == 'header_style_6' ) : ?>
									<?php if ( class_exists( 'WooCommerce' ) && $wc_topbar_cart_hide ): ?>
										<div class="cart_count_wrapper">
											<a href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" class="cart_count"><i class="stm-shopping-cart8"></i><span class="count"><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></span></a>
										</div>
									<?php endif; ?>
									<?php
										if ( get_theme_mod( 'wpml_switcher', true ) ) {
											do_action( 'wpml_add_language_selector' );
										}
									?>
									<ul class="top_bar_contacts">
										<?php
											$top_bar_contact_address = get_theme_mod('top_bar_contact_address', esc_html__( "1010 Avenue of the Moon New York, NY 10018 US.", 'consulting' ));
											$top_bar_contact_address_icon = get_theme_mod('top_bar_contact_address_icon', 'stm-location-2');
											$top_bar_contact_email = get_theme_mod('top_bar_contact_email', 'info@consultingwp.com');
											$top_bar_contact_email_icon = get_theme_mod('top_bar_contact_email_icon', 'stm-email');
											$top_bar_contact_phone = get_theme_mod('top_bar_contact_phone', wp_kses( __( "Call free: <strong>212 386 5575</strong>", 'consulting' ), array( 'strong' => array(), 'span' => array() ) ));
											$top_bar_contact_phone_icon = get_theme_mod('top_bar_contact_phone_icon', 'stm-phone6');
										?>
										<?php if ( !empty( $top_bar_contact_phone ) ): ?>
											<li>
												<i class="<?php echo esc_attr( $top_bar_contact_phone_icon ); ?>"></i>
												<div class="top_bar_contacts_text"><?php echo wp_kses_post( $top_bar_contact_phone, true ); ?></div>
											</li>
										<?php endif; ?>
										<?php if ( ! empty( $top_bar_contact_email ) ): ?>
											<li>
												<i class="<?php echo esc_attr( $top_bar_contact_email_icon ); ?>"></i>
												<div class="top_bar_contacts_text"><a href="mailto:<?php echo esc_url( $top_bar_contact_email ); ?>"><?php echo esc_html( $top_bar_contact_email, true ); ?></a></div>
											</li>
										<?php endif; ?>
										<?php if ( ! empty( $top_bar_contact_address ) ): ?>
											<li>
												<i class="<?php echo esc_attr( $top_bar_contact_address_icon ); ?>"></i>
												<div class="top_bar_contacts_text"><?php echo wp_kses_post( $top_bar_contact_address ); ?></div>
											</li>
										<?php endif; ?>
									</ul>
								<?php else : ?>
									<?php
									if ( get_theme_mod( 'wpml_switcher', true ) ) {
										do_action( 'wpml_add_language_selector' );
									}
									$top_bar_info = consulting_get_top_bar_info();
									?>
									<div class="top_bar_info_wr">
										<?php if ( count( $top_bar_info ) > 1 ): ?>
											<div class="top_bar_info_switcher">
												<div class="active">
													<span><?php echo esc_html( $top_bar_info[1]['office'], true ); ?></span>
												</div>
												<ul>
													<?php foreach ( $top_bar_info as $key => $val ): ?>
														<li>
															<a href="#top_bar_info_<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $val['office'], true ); ?></a>
														</li>
													<?php endforeach; ?>
												</ul>
											</div>
										<?php endif; ?>
										<?php if ( $top_bar_info ): ?>
											<?php foreach ( $top_bar_info as $key => $val ): ?>
												<ul class="top_bar_info" id="top_bar_info_<?php echo esc_attr( $key ); ?>"<?php if ( $key == 1 ) { echo ' style="display: block;"'; } ?>>
													<?php if ( ! empty( $val['address'] ) ): ?>
														<li>
															<i class="<?php echo esc_attr( $val['address_icon'] ); ?>"></i>
															<span><?php echo wp_kses_post( $val['address'] ); ?></span>
														</li>
													<?php endif; ?>
													<?php if ( ! empty( $val['hours'] ) ): ?>
														<li>
															<i class="<?php echo esc_attr( $val['hours_icon'] ); ?>"></i>
															<span><?php echo esc_html( $val['hours'], true ); ?></span>
														</li>
													<?php endif; ?>
													<?php if ( !empty( $val['phone'] ) ): ?>
														<li>
															<i class="<?php echo esc_attr( $val['phone_icon'] ); ?>"></i>
															<span><?php echo esc_html( $val['phone'], true ); ?></span>
														</li>
													<?php endif; ?>
												</ul>
											<?php endforeach; ?>
										<?php endif; ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
				<?php endif; ?>
				<?php if( consulting_get_header_style() == '' || consulting_get_header_style() == 'header_style_1' || consulting_get_header_style() == 'header_style_3' || consulting_get_header_style() == 'header_style_4' ): ?>
					<div class="header_top clearfix">
						<div class="container">
							<?php if ( consulting_get_header_style() != 'header_style_4' && $socials = consulting_get_socials() ): ?>
								<div class="header_socials">
									<?php foreach ( $socials as $key => $val ): ?>
										<a target="_blank" href="<?php echo esc_url( $val ); ?>"><i class="fa fa-<?php echo esc_attr( $key ); ?>"></i></a>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>
							<div class="logo">
								<?php if ( consulting_get_header_style() != 'header_style_4' &&  $logo = get_theme_mod( 'logo', get_template_directory_uri() . '/assets/images/tmp/'. $logo_tmp_src .'logo_default.svg' ) ): ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $logo ); ?>" style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;" alt="<?php bloginfo( 'name' ); ?>" /></a>
								<?php elseif( consulting_get_header_style() == 'header_style_4' && $logo = get_theme_mod( 'dark_logo', get_template_directory_uri() . '/assets/images/tmp/'. $logo_tmp_src .'logo_dark.svg' ) ): ?>
									<?php
										$page_ID = consulting_page_id();
										$header_inverse = get_post_meta( $page_ID, 'header_inverse', true );
										$consulting_config = consulting_config();
									?>
									<?php if( $consulting_config['layout'] == 'layout_6' ) : ?>
										<?php
											if( $header_inverse ) {
												$logo = get_theme_mod( 'logo', get_template_directory_uri() . '/assets/images/tmp/'.$logo_tmp_src.'logo_default.svg' );
											}
										?>
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $logo ); ?>" style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;" alt="<?php bloginfo( 'name' ); ?>" /></a>
									<?php else : ?>
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $logo ); ?>" style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;" alt="<?php bloginfo( 'name' ); ?>" /></a>
									<?php endif; ?>
								<?php else: ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
								<?php endif; ?>
							</div>
							<?php if( consulting_get_header_style() == 'header_style_4' && $header_phone = get_theme_mod( 'header_phone', wp_kses( __( "<strong>212 714 0177</strong>\n<span>Free call</span>", 'consulting' ), array( 'br' => array(), 'strong' => array(), 'span' => array() ) ) ) ): ?>
								<div class="icon_text big clearfix">
									<div class="icon"><i class="fa <?php echo esc_attr( get_theme_mod( 'header_phone_icon', 'fa-phone' ) ); ?>"></i></div>
									<div class="text"><?php echo wp_kses( nl2br( $header_phone ), array( 'br' => array(), 'strong' => array(), 'span' => array() ) ); ?></div>
								</div>
							<?php endif; ?>
							<?php if( $header_hours = get_theme_mod( 'header_working_hours', wp_kses( __( "<strong>Mon - Sat 8.00 - 18.00</strong>\n<span>Sunday CLOSED</span>", 'consulting' ), array( 'br' => array(), 'strong' => array(), 'span' => array() ) ) ) ): ?>
								<div class="icon_text clearfix">
									<div class="icon"><i class="fa <?php echo esc_attr( get_theme_mod( 'header_working_hours_icon', 'fa-clock-o' ) ); ?>"></i></div>
									<div class="text">
										<?php echo wp_kses( nl2br( $header_hours ), array( 'br' => array(), 'strong' => array(), 'span' => array() ) ); ?>
									</div>
								</div>
							<?php endif; ?>
							<?php if( $header_address = get_theme_mod( 'header_address', wp_kses( __( "<strong>1010 Avenue of the Moon</strong>\n<span>New York, NY 10018 US.</span>", 'consulting' ), array( 'br' => array(), 'strong' => array(), 'span' => array() ) ) ) ): ?>
								<div class="icon_text clearfix">
									<div class="icon"><i class="fa <?php echo esc_attr( get_theme_mod( 'header_address_icon', 'fa-map-marker' ) ); ?>"></i></div>
									<div class="text">
										<?php echo wp_kses( nl2br( $header_address ), array( 'br' => array(), 'strong' => array(), 'span' => array() ) ); ?>
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="top_nav">
						<div class="container">
							<div class="top_nav_wrapper clearfix">
								<?php
								wp_nav_menu( array(
										'theme_location' => 'consulting-primary_menu',
										'container'      => false,
										'depth'          => 3,
										'menu_class'     => 'main_menu_nav'
									)
								);
								?>
								<?php if( consulting_get_header_style() != 'header_style_4' && $header_phone = get_theme_mod( 'header_phone', wp_kses( __( "<strong>212 714 0177</strong>\n<span>Free call</span>", 'consulting' ), array( 'br' => array(), 'strong' => array(), 'span' => array() ) ) ) ): ?>
									<div class="icon_text clearfix">
										<div class="icon"><i class="fa <?php echo esc_attr( get_theme_mod( 'header_phone_icon', 'fa-phone' ) ); ?>"></i></div>
										<div class="text"><?php echo wp_kses( nl2br( $header_phone ), array( 'br' => array(), 'strong' => array(), 'span' => array() ) ); ?></div>
									</div>
								<?php endif; ?>
								<?php if ( consulting_get_header_style() == 'header_style_4' && $socials = consulting_get_socials() ): ?>
									<?php if( $consulting_config['layout'] == 'layout_2' ) : ?>
										<div class="header_search">
											<a class="js-open-search-box" href="#"><i class="fa fa-search"></i></a>
											<div class="pop-search-box">
												<form method="get" class="pop-search-box_form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
													<input type="search" class="form-control" placeholder="<?php esc_attr_e( 'Search...', 'consulting' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" />
													<button type="submit"><i class="fa fa-search"></i></button>
												</form>
											</div>
										</div>
									<?php endif; ?>
									<div class="header_socials">
										<?php foreach ( $socials as $key => $val ): ?>
											<a target="_blank" href="<?php echo esc_url( $val ); ?>"><i class="fa fa-<?php echo esc_attr( $key ); ?>"></i></a>
										<?php endforeach; ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php elseif( consulting_get_header_style() == 'header_style_2' ): ?>
					<div class="header_top clearfix">
						<div class="container">
							<div class="logo media-left media-middle">
								<?php if ( $logo = get_theme_mod( 'dark_logo', get_template_directory_uri() . '/assets/images/tmp/'. $logo_tmp_src .'logo_dark.svg' ) ): ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $logo ); ?>" style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;" alt="<?php bloginfo( 'name' ); ?>" /></a>
								<?php else: ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
								<?php endif; ?>
							</div>
							<div class="top_nav media-body media-middle">
								<?php if ( $socials = consulting_get_socials() ): ?>
									<div class="header_socials">
										<?php foreach ( $socials as $key => $val ): ?>
											<a target="_blank" href="<?php echo esc_url( $val ); ?>"><i class="fa fa-<?php echo esc_attr( $key ); ?>"></i></a>
										<?php endforeach; ?>
										<?php if ( class_exists( 'WooCommerce' ) && ! $wc_cart_hide ): ?>
											<a href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" class="cart_count"><i class="stm-cart-2"></i><span class="count"><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></span></a>
										<?php endif; ?>
									</div>
								<?php endif; ?>
								<div class="top_nav_wrapper clearfix">
									<?php
									wp_nav_menu( array(
											'theme_location' => 'consulting-primary_menu',
											'container'      => false,
											'depth'          => 3,
											'menu_class'     => 'main_menu_nav'
										)
									);
									?>
								</div>
							</div>
						</div>
					</div>
				<?php elseif( consulting_get_header_style() == 'header_style_5' ) : ?>
					<div class="header_top clearfix">
						<div class="container">
							<?php if( $header_phone = get_theme_mod( 'header_phone', wp_kses( __( "<strong>212 714 0177</strong>\n<span>Free call</span>", 'consulting' ), array( 'br' => array(), 'strong' => array(), 'span' => array() ) ) ) ): ?>
								<div class="info-text __phone-number">
									<?php echo wp_kses( nl2br( $header_phone ), array( 'br' => array(), 'strong' => array(), 'span' => array() ) ); ?>
								</div>
							<?php endif; ?>
							<?php
								if ( get_theme_mod( 'wpml_switcher', true ) ) {
									do_action( 'wpml_add_language_selector' );
								}
							?>
							<div class="logo">
								<?php
									$page_ID = consulting_page_id();
									$header_inverse = get_post_meta( $page_ID, 'header_inverse', true );
								?>
								<?php if ( $header_inverse && $logo = get_theme_mod( 'logo', get_template_directory_uri() . '/assets/images/tmp/'. $logo_tmp_src .'logo_default.svg' ) ): ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $logo ); ?>" style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;" alt="<?php bloginfo( 'name' ); ?>" /></a>
								<?php elseif( $logo = get_theme_mod( 'dark_logo', get_template_directory_uri() . '/assets/images/tmp/'. $logo_tmp_src .'logo_dark.svg' ) ): ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $logo ); ?>" style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;" alt="<?php bloginfo( 'name' ); ?>" /></a>
								<?php else: ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="top_nav">
						<div class="container">
							<div class="top_nav_wrapper clearfix">
								<?php
								wp_nav_menu( array(
										'theme_location' => 'consulting-primary_menu',
										'container'      => false,
										'depth'          => 3,
										'menu_class'     => 'main_menu_nav'
									)
								);
								?>
							</div>
						</div>
					</div>

				<?php elseif( consulting_get_header_style() == 'header_style_6' ) : ?>

					<div class="header_top clearfix">
						<div class="container">
							<div class="header_top_wrapper">
								<div class="logo media-left media-middle">
									<?php if ( $logo = get_theme_mod( 'logo', get_template_directory_uri() . '/assets/images/tmp/'. $logo_tmp_src .'logo_default.svg' ) ): ?>
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $logo ); ?>" style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;" alt="<?php bloginfo( 'name' ); ?>" /></a>
									<?php else: ?>
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
									<?php endif; ?>
								</div>
								<div class="top_nav media-body media-middle">
									<div class="top_nav_wrapper clearfix">
										<?php
										wp_nav_menu( array(
												'theme_location' => 'consulting-primary_menu',
												'container'      => false,
												'depth'          => 3,
												'menu_class'     => 'main_menu_nav'
											)
										);
										?>
									</div>
								</div>
							</div>
						</div>
					</div>

				<?php elseif( consulting_get_header_style() == 'header_style_7' ) : ?>
					<?php
						$socials = consulting_get_socials();
						$header_side_class = '';
						if( !empty( $socials ) && is_array( $socials ) ) {
							$header_side_class .= ' has-socials';
						}
					?>
					<div class="header_side clearfix<?php echo $header_side_class; ?>">
						<div class="container">
							<div class="header_side_wrapper">
								<div class="logo">
									<?php
										if( $consulting_config['layout'] == 'layout_9' ) {
											$logo = get_theme_mod( 'logo', get_template_directory_uri() . '/assets/images/tmp/'. $logo_tmp_src .'logo_dark.svg' );
										} else {
											$logo = get_theme_mod( 'logo', get_template_directory_uri() . '/assets/images/tmp/'. $logo_tmp_src .'logo_default.svg' );
										}
									?>
									<?php if ( $logo ): ?>
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $logo ); ?>" style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;" alt="<?php bloginfo( 'name' ); ?>" /></a>
									<?php else: ?>
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
									<?php endif; ?>
								</div>
								<div class="side_nav">
									<div class="side_nav_wrapper clearfix">
										<?php
											wp_nav_menu( array(
													'theme_location' => 'consulting-primary_menu',
													'container'      => false,
													'depth'          => 3,
													'menu_class'     => 'main_menu_nav'
												)
											);
										?>
									</div>
								</div>
								<?php if ( $socials = consulting_get_socials() ): ?>
									<div class="header_socials">
										<?php foreach ( $socials as $key => $val ): ?>
											<a target="_blank" href="<?php echo esc_url( $val ); ?>"><i class="fa fa-<?php echo esc_attr( $key ); ?>"></i></a>
										<?php endforeach; ?>
									</div>
								<?php endif; ?>
								<?php if( $copyright = get_theme_mod( 'header_copyright', wp_kses( __( "Theme by <a href='http://stylemixthemes.com/' target='_blank'>Stylemix Themes</a> <br>2016 &copy; All rights reserved.", 'consulting' ), array( 'a' => array( 'href' => array(), 'target' => array() ) ) ) ) ): ?>
									<div class="header_copyright">
										<?php echo wp_kses( $copyright, array( 'a' => array( 'href' => array(), 'target' => array() ), 'br' => array() ) ); ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>

				<?php endif; ?>

				<div class="mobile_header">
					<div class="logo_wrapper clearfix">
						<div class="logo">
							<?php if ( $logo = get_theme_mod( 'dark_logo', get_template_directory_uri() . '/assets/images/tmp/'. $logo_tmp_src .'logo_dark.svg' ) ): ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $logo ); ?>" style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;" alt="<?php bloginfo( 'name' ); ?>" /></a>
							<?php else: ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
							<?php endif; ?>
						</div>
						<div id="menu_toggle">
							<button></button>
						</div>
					</div>
					<div class="header_info">
						<div class="top_nav_mobile">
							<?php
							wp_nav_menu( array(
									'theme_location' => 'consulting-primary_menu',
									'container'      => false,
									'depth'          => 3,
									'menu_class'     => 'main_menu_nav'
								)
							);
							?>
						</div>
						<div class="icon_texts">
							<?php if( $header_phone = get_theme_mod( 'header_phone', wp_kses( __( "<strong>212 714 0177</strong>\n<span>Free call</span>", 'consulting' ), array( 'br' => array(), 'strong' => array(), 'span' => array() ) ) ) ): ?>
								<div class="icon_text clearfix">
									<div class="icon"><i class="fa <?php echo esc_attr( get_theme_mod( 'header_phone_icon', 'fa-phone' ) ); ?>"></i></div>
									<div class="text">
										<?php echo wp_kses( nl2br( $header_phone ), array( 'br' => array(), 'strong' => array(), 'span' => array() ) ); ?>
									</div>
								</div>
							<?php endif; ?>
							<?php if( $header_hours = get_theme_mod( 'header_working_hours', wp_kses( __( "<strong>Mon - Sat 8.00 - 18.00</strong>\n<span>Sunday CLOSED</span>", 'consulting' ), array( 'br' => array(), 'strong' => array(), 'span' => array() ) ) ) ): ?>
								<div class="icon_text clearfix">
									<div class="icon"><i class="fa <?php echo esc_attr( get_theme_mod( 'header_working_hours_icon', 'fa-clock-o' ) ); ?>"></i></div>
									<div class="text">
										<?php echo wp_kses( nl2br( $header_hours ), array( 'br' => array(), 'strong' => array(), 'span' => array() ) ); ?>
									</div>
								</div>
							<?php endif; ?>
							<?php if( $header_address = get_theme_mod( 'header_address', wp_kses( __( "<strong>1010 Avenue of the Moon</strong>\n<span>New York, NY 10018 US.</span>", 'consulting' ), array( 'br' => array(), 'strong' => array(), 'span' => array() ) ) ) ): ?>
								<div class="icon_text clearfix">
									<div class="icon"><i class="fa <?php echo esc_attr( get_theme_mod( 'header_address_icon', 'fa-map-marker' ) ); ?>"></i></div>
									<div class="text">
										<?php echo wp_kses( nl2br( $header_address ), array( 'br' => array(), 'strong' => array(), 'span' => array() ) ); ?>
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</header>
			<div id="main">
				<?php get_template_part( 'partials/title_box' ); ?>
				<div class="container">
		<?php endif; ?>