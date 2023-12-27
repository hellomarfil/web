<?php
if( ! function_exists('consulting_config') ) {
	function consulting_config() {
		$config = array();
		$consulting_layout = get_option('consulting_layout');

		$config['layout'] = (( !empty( $consulting_layout ) ) ? $consulting_layout : 'layout_1' );
		$config['fonts'] = '';

		switch( $config['layout'] ) {
			case 'layout_12':
				$config['fonts'] = array(
					'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
					'rubik'   => 'Rubik:400,300,500,700,900&subset=latin,latin-ext'
				);

				$config['primary_font_family'] = 'Open Sans';
				$config['primary_font_size'] = 14;
				$config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li';

				$config['secondary_font_family'] = 'Rubik';
				$config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .service_tab_item .service_cost,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

				$config['base_color'] = '#002e5b';
				$config['secondary_color'] = '#6c98e1';
				$config['third_color'] = '#fde428';


				$config['base_rgb_color'] = array(
					'rgb' => '0, 46, 91',
					'alpha' => array('0.9', '0.75', '0.5', '0.25', '0.21', '0.8')
				);
				$config['secondary_rgb_color'] = array(
					'rgb' => '108, 152, 225',
					'alpha' => array('0.9')
				);
				$config['third_rgb_color'] = array(
					'rgb' => '253, 228, 40',
					'alpha' => array('0.5')
				);

				break;
			case 'layout_11':
				$config['primary_font_family'] = 'Open Sans';
				$config['primary_font_size'] = 14;
				$config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

				$config['secondary_font_family'] = 'Montserrat';
				$config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

				$config['fonts'] = array(
					'open_sans'  => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
					'montserrat' => 'Montserrat:400,700'
				);

				$config['base_color'] = '#222831';
				$config['secondary_color'] = '#7bc74d';
				$config['third_color'] = '#7bc74d';


				$config['base_rgb_color'] = array(
					'rgb' => '34, 40, 49',
					'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
				);
				$config['secondary_rgb_color'] = array(
					'rgb' => '123, 199, 77',
					'alpha' => array('0.9', '0.5')
				);
				$config['third_rgb_color'] = array(
					'rgb' => '123, 199, 77',
					'alpha' => ''
				);

				break;
			case 'layout_10':
				$config['primary_font_family'] = 'Open Sans';
				$config['primary_font_size'] = 14;
				$config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong,
					body.header_style_4 .header_top .icon_text .text b,
					body.header_style_6 .top_bar_contacts_text strong,
					body.header_style_6 .top_bar_contacts_text b';

				$config['secondary_font_family'] = 'Montserrat';
				$config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

				$config['fonts'] = array(
					'open_sans'  => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
					'montserrat' => 'Montserrat:400,700'
				);

				$config['base_color'] = '#17181d';
				$config['secondary_color'] = '#e33062';
				$config['third_color'] = '#e33062';


				$config['base_rgb_color'] = array(
					'rgb' => '23, 24, 29',
					'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.35')
				);
				$config['secondary_rgb_color'] = array(
					'rgb' => '227, 48, 98',
					'alpha' => array('0.5')
				);
				$config['third_rgb_color'] = array(
					'rgb' => '227, 48, 98',
					'alpha' => ''
				);

				break;
			case 'layout_9':
				$config['primary_font_family'] = 'Open Sans';
				$config['primary_font_size'] = 14;
				$config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

				$config['secondary_font_family'] = 'Montserrat';
				$config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

				$config['fonts'] = array(
					'open_sans'  => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
					'montserrat' => 'Montserrat:400,700'
				);

				$config['base_color'] = '#1e1f21';
				$config['secondary_color'] = '#fd9b28';
				$config['third_color'] = '#fd9b28';


				$config['base_rgb_color'] = array(
					'rgb' => '30, 31, 33',
					'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8')
				);
				$config['secondary_rgb_color'] = array(
					'rgb' => '253, 155, 40',
					'alpha' => array('0.9', '0.5')
				);
				$config['third_rgb_color'] = array(
					'rgb' => '253, 155, 40',
					'alpha' => array('0.9', '0.5')
				);

				break;
			case 'layout_8':
				$config['primary_font_family'] = 'Open Sans';
				$config['primary_font_size'] = 14;
				$config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong,
					body.header_style_4 .header_top .icon_text .text b,
					body.header_style_6 .top_bar_contacts_text strong,
					body.header_style_6 .top_bar_contacts_text b';

				$config['secondary_font_family'] = 'Montserrat';
				$config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

				$config['fonts'] = array(
					'open_sans'  => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
					'montserrat' => 'Montserrat:400,700'
				);

				$config['base_color'] = '#29363b';
				$config['secondary_color'] = '#b2ac90';
				$config['third_color'] = '#f15822';


				$config['base_rgb_color'] = array(
					'rgb' => '41, 54, 59',
					'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.35')
				);
				$config['secondary_rgb_color'] = array(
					'rgb' => '178, 172, 144',
					'alpha' => array('0.5')
				);
				$config['third_rgb_color'] = array(
					'rgb' => '241, 88, 34',
					'alpha' => ''
				);

				break;
			case 'layout_7':
				$config['primary_font_family'] = 'Open Sans';
				$config['primary_font_size'] = 14;
				$config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong,
					body.header_style_4 .header_top .icon_text .text b,
					body.header_style_6 .top_bar_contacts_text strong,
					body.header_style_6 .top_bar_contacts_text b';

				$config['secondary_font_family'] = 'Montserrat';
				$config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

				$config['fonts'] = array(
					'open_sans'  => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
					'montserrat' => 'Montserrat:400,700'
				);

				$config['base_color'] = '#142440';
				$config['secondary_color'] = '#4ac8ed';
				$config['third_color'] = '#4ac8ed';


				$config['base_rgb_color'] = array(
					'rgb' => '20, 36, 64',
					'alpha' => array('0.25', '0.21', '0.75', '0.9', '0.6', '0.5')
				);
				$config['secondary_rgb_color'] = array(
					'rgb' => '74, 200, 237',
					'alpha' => array('0.6')
				);
				$config['third_rgb_color'] = array(
					'rgb' => '74, 200, 237',
					'alpha' => array('0.6')
				);

				break;
			case 'layout_6':
				$config['primary_font_family'] = 'Open Sans';
				$config['primary_font_size'] = 13;
				$config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

				$config['secondary_font_family'] = 'Montserrat';
				$config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

				$config['fonts'] = array(
					'open_sans'  => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
					'montserrat' => 'Montserrat:400,700'
				);

				$config['base_color'] = '#090821';
				$config['secondary_color'] = '#c79d63';
				$config['third_color'] = '#c79d63';


				$config['base_rgb_color'] = array(
					'rgb' => '9, 8, 33',
					'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5')
				);
				$config['secondary_rgb_color'] = array(
					'rgb' => '199, 157, 99',
					'alpha' => array('0.75', '0.5')
				);
				$config['third_rgb_color'] = array(
					'rgb' => '74, 200, 237',
					'alpha' => ''
				);

				break;
			case 'layout_5':
				$config['primary_font_family'] = 'Open Sans';
				$config['primary_font_size'] = 14;
				$config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

				$config['secondary_font_family'] = 'Montserrat';
				$config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

				$config['fonts'] = array(
					'open_sans'  => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
					'montserrat' => 'Montserrat:400,700'
				);

				$config['base_color'] = '#251021';
				$config['secondary_color'] = '#6991d1';
				$config['third_color'] = '#6cbaae';


				$config['base_rgb_color'] = array(
					'rgb' => '37, 16, 33',
					'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5')
				);
				$config['secondary_rgb_color'] = array(
					'rgb' => '105, 145, 209',
					'alpha' => array('0.6')
				);
				$config['third_rgb_color'] = array(
					'rgb' => '108, 186, 174',
					'alpha' => array('0.8', '0.5')
				);

				break;
			case 'layout_4':
				$config['primary_font_family'] = 'Open Sans';
				$config['primary_font_size'] = 13;
				$config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

				$config['secondary_font_family'] = 'Montserrat';
				$config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

				$config['fonts'] = array(
					'open_sans'  => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
					'montserrat' => 'Montserrat:400,700'
				);

				$config['base_color'] = '#30344d';
				$config['secondary_color'] = '#038875';
				$config['third_color'] = '#a5d4ce';


				$config['base_rgb_color'] = array(
					'rgb' => '48, 52, 77',
					'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.3', '0.5')
				);
				$config['secondary_rgb_color'] = array(
					'rgb' => '3, 136, 117',
					'alpha' => ''
				);
				$config['third_rgb_color'] = array(
					'rgb' => '165, 212, 206',
					'alpha' => array('0.5')
				);

				break;
			case 'layout_3':
				$config['fonts'] = array(
					'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
					'poppins'   => 'Poppins:400,500,300,600,700&subset=latin,latin-ext,devanagari'
				);

				$config['primary_font_family'] = 'Open Sans';
				$config['primary_font_size'] = 14;
				$config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li';

				$config['secondary_font_family'] = 'Poppins';
				$config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .service_tab_item .service_cost,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

				$config['base_color'] = '#153e4d';
				$config['secondary_color'] = '#fde953';
				$config['third_color'] = '#fde953';


				$config['base_rgb_color'] = array(
					'rgb' => '21, 62, 77',
					'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.78')
				);
				$config['secondary_rgb_color'] = array(
					'rgb' => '253, 233, 83',
					'alpha' => ''
				);
				$config['third_rgb_color'] = array(
					'rgb' => '253, 233, 83',
					'alpha' => ''
				);

				break;
			case 'layout_2':
				$config['primary_font_family'] = 'Open Sans';
				$config['primary_font_size'] = 14;
				$config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

				$config['secondary_font_family'] = 'Montserrat';
				$config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

				$config['fonts'] = array(
					'open_sans'  => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
					'montserrat' => 'Montserrat:400,700'
				);

				$config['base_color'] = '#1e1f21';
				$config['secondary_color'] = '#fd9b28';
				$config['third_color'] = '#fd9b28';


				$config['base_rgb_color'] = array(
					'rgb' => '30, 31, 33',
					'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8')
				);
				$config['secondary_rgb_color'] = array(
					'rgb' => '253, 155, 40',
					'alpha' => array('0.5')
				);
				$config['third_rgb_color'] = array(
					'rgb' => '253, 155, 40',
					'alpha' => array('0.5')
				);


				break;
			default:
				$config['fonts'] = array(
					'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
					'poppins'   => 'Poppins:400,500,300,600,700&subset=latin,latin-ext,devanagari'
				);

				$config['primary_font_family'] = 'Open Sans';
				$config['primary_font_size'] = 14;
				$config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li';

				$config['secondary_font_family'] = 'Poppins';
				$config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .service_tab_item .service_cost,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

				$config['base_color'] = '#002e5b';
				$config['secondary_color'] = '#6c98e1';
				$config['third_color'] = '#fde428';


				$config['base_rgb_color'] = array(
					'rgb' => '0, 46, 91',
					'alpha' => array('0.9', '0.75', '0.5', '0.25', '0.21')
				);
				$config['secondary_rgb_color'] = array(
					'rgb' => '108, 152, 225',
					'alpha' => array('0.9')
				);
				$config['third_rgb_color'] = array(
					'rgb' => '253, 228, 40',
					'alpha' => array('0.5')
				);
		}

		return $config;
	}
}