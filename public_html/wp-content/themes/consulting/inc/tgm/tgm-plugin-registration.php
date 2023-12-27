<?php

require_once dirname( __FILE__ ) . '/tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'stm_require_plugins' );

function stm_require_plugins() {
	$plugins_path = get_template_directory() . '/inc/tgm/plugins';
	$plugins      = array(
		array(
			'name'             => 'STM Post Type',
			'slug'             => 'stm-post-type',
			'source'           => $plugins_path . '/stm-post-type.zip',
			'required'         => true,
			'force_activation' => true,
			'version'          => '1.1'
		),
		array(
			'name'             => 'STM Importer',
			'slug'             => 'stm-importer',
			'source'           => $plugins_path . '/stm-importer.zip',
			'required'         => true,
			'force_activation' => true,
			'version'          => '1.3'
		),
		array(
			'name'             => 'Custom Icons by Stylemixthemes',
			'slug'             => 'custom-icons-by-stylemixthemes',
			'source'           => $plugins_path . '/custom-icons-by-stylemixthemes.zip',
			'required'         => true,
			'force_activation' => true,
			'version'          => '1.2'
		),
		array(
			'name'         => 'WPBakery Visual Composer',
			'slug'         => 'js_composer',
			'source'       => $plugins_path . '/js_composer.zip',
			'required'     => true,
			'external_url' => 'http://vc.wpbakery.com',
			'version'      => '4.12'
		),
		array(
			'name'         => 'Revolution Slider',
			'slug'         => 'revslider',
			'source'       => $plugins_path . '/revslider.zip',
			'required'     => false,
			'external_url' => 'http://www.themepunch.com/revolution/',
			'version'      => '5.2.5.4'
		),
		array(
			'name'     => 'Breadcrumb NavXT',
			'slug'     => 'breadcrumb-navxt',
			'required' => true
		),
		array(
			'name'     => 'Instagram Feed',
			'slug'     => 'instagram-feed',
			'required' => false
		),
		array(
			'name'      => 'WooCommerce',
			'slug'      => 'woocommerce',
			'required'  => false
		),
		array(
			'name'     => 'Contact Form 7',
			'slug'     => 'contact-form-7',
			'required' => false
		),
		array(
			'name'     => 'Force Regenerate Thumbnails',
			'slug'     => 'force-regenerate-thumbnails',
			'required' => false
		),
		array(
			'name'     => 'MailChimp for WordPress Lite',
			'slug'     => 'mailchimp-for-wp',
			'required' => false
		),
		array(
			'name'     => 'Recent Tweets Widget',
			'slug'     => 'recent-tweets-widget',
			'required' => false
		),
		array(
			'name'     => 'TinyMCE Advanced',
			'slug'     => 'tinymce-advanced',
			'required' => false
		),
		array(
			'name'     => 'AddToAny Share Buttons',
			'slug'     => 'add-to-any',
			'required' => false
		)
	);

	tgmpa( $plugins, array( 'is_automatic' => true ) );

}