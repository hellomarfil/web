<?php
$consulting_config = consulting_config();
?>
<div id="frontend_customizer">
	<div class="customizer_wrapper">
		<h3><?php esc_html_e('Demos', 'consulting'); ?></h3>
		<div class="customizer_element __demos">
			<select name="demos_switcher" id="demos_switcher" data-class="demos_switcher">
				<option class="demo_one" demo-url="http://consulting.stylemixthemes.com" value="one"><?php esc_html_e( 'New York', 'consulting' ); ?></option>
				<option class="demo_two" demo-url="http://consulting.stylemixthemes.com/two" value="two"><?php esc_html_e( 'London', 'consulting' ); ?></option>
				<option class="demo_three" demo-url="http://consulting.stylemixthemes.com/three" value="three"><?php esc_html_e( 'Frankfurt', 'consulting' ); ?></option>
				<option class="demo_four" demo-url="http://consulting.stylemixthemes.com/four" value="four"><?php esc_html_e( 'Moscow', 'consulting' ); ?></option>
				<option class="demo_five" demo-url="http://consulting.stylemixthemes.com/five" value="five"><?php esc_html_e( 'Shanghai', 'consulting' ); ?></option>
				<option class="demo_six" demo-url="http://consulting.stylemixthemes.com/six" value="six"><?php esc_html_e( 'Madrid', 'consulting' ); ?></option>
				<option class="demo_seven" demo-url="http://consulting.stylemixthemes.com/seven" value="seven"><?php esc_html_e( 'Tokyo', 'consulting' ); ?></option>
				<option class="demo_eight" demo-url="http://consulting.stylemixthemes.com/eight" value="eight"><?php esc_html_e( 'Seoul', 'consulting' ); ?></option>
				<option class="demo_nine" demo-url="http://consulting.stylemixthemes.com/nine" value="nine"><?php esc_html_e( 'Sydney', 'consulting' ); ?></option>
				<option class="demo_ten" demo-url="http://consulting.stylemixthemes.com/ten" value="ten"><?php esc_html_e( 'Hong Kong', 'consulting' ); ?></option>
				<option class="demo_eleven" demo-url="http://consulting.stylemixthemes.com/eleven" value="eleven"><?php esc_html_e( 'Paris', 'consulting' ); ?></option>
				<option class="demo_twelve" demo-url="http://consulting.stylemixthemes.com/twelve" value="twelve"><?php esc_html_e( 'Singapore', 'consulting' ); ?></option>
			</select>
		</div>

		<?php if( $consulting_config['layout'] == 'layout_1' ) : ?>
			<h3><?php esc_html_e( 'Color Skin', 'consulting' ); ?></h3>
			<div class="customizer_element">
				<div class="customizer_colors" id="skin_color">
					<span id="skin_default"></span>
					<span id="skin_turquoise"></span>
					<span id="skin_dark_denim"></span>
					<span id="skin_arctic_black"></span>
				</div>
			</div>

			<h3><?php esc_html_e('Header Style', 'consulting'); ?></h3>
			<div class="customizer_element">
				<select name="header_style">
					<option class="header_style_1" value="<?php echo esc_url( home_url( '/home-2/?header_demo=header_style_1&hide_top_bar=1' ) ); ?>"><?php esc_html_e( 'Style 1', 'consulting' ); ?></option>
					<option class="header_style_2" value="<?php echo esc_url( home_url( '/?header_demo=header_style_2' ) ); ?>"><?php esc_html_e( 'Style 2', 'consulting' ); ?></option>
					<option class="header_style_3" value="<?php echo esc_url( home_url( '/home-2/?header_demo=header_style_3&hide_top_bar=1' ) ); ?>"><?php esc_html_e( 'Style 3', 'consulting' ); ?></option>
					<option class="header_style_4" value="<?php echo esc_url( home_url( '/home-2/?header_demo=header_style_4&hide_top_bar=1' ) ); ?>"><?php esc_html_e( 'Style 4', 'consulting' ); ?></option>
				</select>
			</div>

			<h3><?php esc_html_e('Nav Mode', 'consulting'); ?></h3>
			<div class="customizer_element">
				<div class="stm_switcher active" id="navigation_type">
					<div class="switcher_label disable"><?php esc_html_e('Static', 'consulting'); ?></div>
					<div class="switcher_nav"></div>
					<div class="switcher_label enable"><?php esc_html_e('Sticky', 'consulting'); ?></div>
				</div>
			</div>
		<?php endif; ?>

		<?php if( $consulting_config['layout'] != 'layout_10' && $consulting_config['layout'] != 'layout_12' ) : ?>
			<h3><?php esc_html_e('Layout', 'consulting'); ?></h3>
			<div class="customizer_element">
				<div class="stm_switcher" id="site_layout">
					<div class="switcher_label disable"><?php esc_html_e('Wide', 'consulting'); ?></div>
					<div class="switcher_nav"></div>
					<div class="switcher_label enable"><?php esc_html_e('Boxed', 'consulting'); ?></div>
				</div>
			</div>

			<div class="customizer_bg_image" style="display: none;">
				<h3><?php esc_html_e('Background Image', 'consulting'); ?></h3>
				<div class="customizer_element">
					<div class="customizer_colors" id="bg_images">
						<span class="image_type active" data-image="<?php echo get_template_directory_uri(); ?>/assets/images/bg/img_1.jpg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/prev_img_1.png'); "></span>
						<span class="image_type" data-image="<?php echo get_template_directory_uri(); ?>/assets/images/bg/img_2.jpg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/prev_img_2.png'); "></span>
						<span data-image="<?php echo get_template_directory_uri(); ?>/assets/images/bg/img_3.png" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/prev_img_3.png'); "></span>
						<span data-image="<?php echo get_template_directory_uri(); ?>/assets/images/bg/img_4.png" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/prev_img_4.png'); "></span>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
	<div id="frontend_customizer_button"><i class="fa fa-cog"></i></div>

	<div class="customizer-demos">
		<div class="customizer-demos_list">
			<a demo-number="one" class="active" href="http://consulting.stylemixthemes.com"><img src="http://consulting.stylemixthemes.com/landing/assets/img/demo/1.jpg" alt=""></a>
			<a demo-number="two" href="http://consulting.stylemixthemes.com/two"><img src="http://consulting.stylemixthemes.com/landing/assets/img/demo/6.jpg" alt=""></a>
			<a demo-number="three" href="http://consulting.stylemixthemes.com/three"><img src="http://consulting.stylemixthemes.com/landing/assets/img/demo/9.jpg" alt=""></a>
			<a demo-number="four" href="http://consulting.stylemixthemes.com/four"><img src="http://consulting.stylemixthemes.com/landing/assets/img/demo/5.jpg" alt=""></a>
			<a demo-number="five" href="http://consulting.stylemixthemes.com/five"><img src="http://consulting.stylemixthemes.com/landing/assets/img/demo/2.jpg" alt=""></a>
			<a demo-number="six" href="http://consulting.stylemixthemes.com/six"><img src="http://consulting.stylemixthemes.com/landing/assets/img/demo/7.jpg" alt=""></a>
			<a demo-number="seven" href="http://consulting.stylemixthemes.com/seven"><img src="http://consulting.stylemixthemes.com/landing/assets/img/demo/3.jpg" alt=""></a>
			<a demo-number="eight" href="http://consulting.stylemixthemes.com/eight"><img src="http://consulting.stylemixthemes.com/landing/assets/img/demo/8.jpg" alt=""></a>
			<a demo-number="nine" href="http://consulting.stylemixthemes.com/nine"><img src="http://consulting.stylemixthemes.com/landing/assets/img/demo/4.jpg" alt=""></a>
			<a demo-number="ten" href="http://consulting.stylemixthemes.com/ten"><img src="http://consulting.stylemixthemes.com/landing/assets/img/demo/10.jpg" alt=""></a>
			<a demo-number="eleven" href="http://consulting.stylemixthemes.com/eleven"><img src="http://consulting.stylemixthemes.com/landing/assets/img/demo/11.jpg" alt=""></a>
			<a demo-number="twelve" href="http://consulting.stylemixthemes.com/twelve"><img src="http://consulting.stylemixthemes.com/landing/assets/img/demo/12.jpg" alt=""></a>
		</div>
	</div>
</div>

<div class="stm-site-preloader preloader-wrapper big">
	<div class="spinner-layer spinner-blue-only">
		<div class="circle-clipper left">
			<div class="circle"></div>
		</div><div class="gap-patch">
			<div class="circle"></div>
		</div><div class="circle-clipper right">
			<div class="circle"></div>
		</div>
	</div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function ($) {
		"use strict";

		$("#frontend_customizer_button").on('click', function () {
			if ($("#frontend_customizer").hasClass('open')) {
				$("#frontend_customizer").removeClass('open');
				$(this).find('.fa').removeClass('fa-spin');
			} else {
				$("#frontend_customizer").addClass('open');
				$(this).find('.fa').addClass('fa-spin');
			}
		});

		$('#main').on('click', function (kik) {
			if (!$(kik.target).is('#frontend_customizer, #frontend_customizer *') && $('#frontend_customizer').is(':visible')) {
				$("#frontend_customizer").removeClass('open');
				$(this).find('.fa').removeClass('fa-spin');
			}
		});

		<?php if( $consulting_config['layout'] == 'layout_1' ) : ?>

		$("#skin_color span").on('click', function () {
			var style_id = $(this).attr('id');
			$("#skin_color .active").removeClass("active");
			$(this).addClass("active");
			$("#custom_style").remove();
			$.removeCookie( 'site_skin', {path: '/'} );
			if( style_id != 'skin_default' ){
				$("#custom_style").remove();
				$("head").append('<link rel="stylesheet" id="custom_style" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/layout_1/'+style_id+'.css" type="text/css" media="all">');
				$.cookie('site_skin', style_id, {expires: 7, path: '/'});
				if( $("body").hasClass( 'header_style_2' ) || $("body").hasClass( 'header_style_4' ) ){
					$(".logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_dark_'+style_id+'.svg' );
					$(".footer_logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_'+style_id+'.svg' );
				}else{
					$(".logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_'+style_id+'.svg' );
					$(".footer_logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_'+style_id+'.svg' );
				}
				$(".mobile_header .logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_dark_'+style_id+'.svg' );
			}else{
				if( $("body").hasClass( 'header_style_2' ) || $("body").hasClass( 'header_style_4' ) ) {
					$(".logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_dark.svg');
					$(".footer_logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_default.svg');
				}else{
					$(".logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_default.svg');
					$(".footer_logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_default.svg');
				}
				$(".mobile_header .logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_dark.svg' );
			}
		});

		if ( $.cookie('site_skin') ) {
			$("#skin_color #" + $.cookie('site_skin')).addClass("active");
			if( $.cookie('site_skin') != 'skin_default' ){
				$("head").append('<link rel="stylesheet" id="custom_style" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/layout_1/'+$.cookie('site_skin')+'.css" type="text/css" media="all">');
			}
			$("#skin_color #" + $.cookie('site_skin') ).addClass("active");
			if( $("body").hasClass( 'header_style_2' ) || $("body").hasClass( 'header_style_4' ) ) {
				$(".logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_dark_' + $.cookie('site_skin') + '.svg');
			}else{
				$(".logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_' + $.cookie('site_skin') + '.svg');
			}
			$(".footer_logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_'+$.cookie('site_skin')+'.svg' );
			$(".mobile_header .logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_dark_'+$.cookie('site_skin')+'.svg' );
		}else{
			$("#skin_color #skin_default").addClass("active");
		}


		if ($.cookie('navigation_type') && $.cookie('navigation_type') == 'sticky_header') {
			$("body").addClass('sticky_header sticky_menu');
		}else{
			$("body").removeClass('sticky_header sticky_menu');
		}

		$("#navigation_type").on("click", function () {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
				$("body").removeClass('sticky_header sticky_menu');
				$.cookie('navigation_type', 'static_header', {expires: 7, path: '/'});
			} else {
				$(this).addClass('active');
				$("body").addClass('sticky_header sticky_menu');
				$.cookie('navigation_type', 'sticky_header', {expires: 7, path: '/'});
			}
		});

		if($("body").hasClass("sticky_header")){
			$("#navigation_type").addClass("active");
		}else{
			$("#navigation_type").removeClass("active");
		}

		<?php endif; ?>

		if( $.cookie('site_layout') && $.cookie('site_layout') == 'boxed' ){
			$("#site_layout").addClass('active');
			$("body").addClass('boxed_layout');
			$(".customizer_bg_image").slideDown();
			$('body').removeClass('boxed_bg_image_default boxed_bg_image_pattern');
			if( $("#bg_images span.active").hasClass('image_type') ){
				$('body').addClass('boxed_bg_image_default');
			}else{
				$('body').addClass('boxed_bg_image_pattern');
			}
			$('body').css({'background-image' : 'url(' + $("#bg_images span.active").attr('data-image') + ')'});
		}

		$("#site_layout").on("click", function () {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
				$("body").removeClass('boxed_layout');
				$.removeCookie( 'site_layout', {path: '/'} );
				$(".customizer_bg_image").slideUp();
			} else {
				$(this).addClass('active');
				$("body").addClass('boxed_layout');
				$.cookie('site_layout', 'boxed', {expires: 7, path: '/'});
				$(".customizer_bg_image").slideDown();
				$('body').removeClass('boxed_bg_image_default boxed_bg_image_pattern');
				if( $("#bg_images span.active").hasClass('image_type') ){
					$('body').addClass('boxed_bg_image_default');
				}else{
					$('body').addClass('boxed_bg_image_pattern');
				}
				$('body').css({'background-image': 'url(' + $("#bg_images span.active").attr('data-image') + ')'});
			}
		});

		$("#bg_images span").on('click', function () {
			$("#bg_images .active").removeClass("active");
			$(this).addClass("active");
			$('body').removeClass('boxed_bg_image_default boxed_bg_image_pattern');
			if( $(this).hasClass('image_type') ){
				$('body').addClass('boxed_bg_image_default');
			}else{
				$('body').addClass('boxed_bg_image_pattern');
			}
			$('body').css({'background-image' : 'url(' + $(this).attr('data-image') + ')'});
		});

		$("select[name='header_style']").on("change", function () {
			window.location.href = $(this).val();
		});

		$("#demos_switcher option").each(function() {
			if( window.location.href.indexOf($(this).attr("demo-url")) != -1 ) {
				$(this).attr("selected", "selected");
			}
		});

		$("select[name='demos_switcher']").on("change", function (e) {
			var $sitePreloader = $(".stm-site-preloader");
			window.location.href = $(this).find("option:selected").attr('demo-url');
			$('body').addClass("stm-demo-changed");
			if( $sitePreloader.length && ! $sitePreloader.hasClass("active") ) {
				$sitePreloader.addClass("active");
			}
		});

		$("select[name='demos_switcher']").on('select2:open', function(e){
			var selectClass = e.currentTarget.dataset.class;
			if(typeof(selectClass) != 'undefined') {
				$('.select2-container--open').addClass(selectClass);
			}
		});

		$("select[name='demos_switcher']").on('select2:close', function(e) {
			if($(".customizer-demos").length) {
				$(".customizer-demos").removeClass("active");
			}
		});

		$(document).on("mouseover", ".select2-container.demos_switcher .select2-results__option", function() {
			if($(".customizer-demos").length) {
				$(".customizer-demos").css("top", $(this).position().top+"px").addClass("active");

				var $choosedDemo = $(".customizer-demos [demo-number="+$(this).find('span').attr('class')+"]");
				if( $choosedDemo.length ) {
					$choosedDemo.addClass("active").siblings().removeClass("active");
				}
			}
		});

		$(document).on("mouseout", ".select2-container.demos_switcher .select2-results__option", function() {
			if($(".customizer-demos").length) {
				$(".customizer-demos").removeClass("active");
			}

			if( $(".customizer-demos [demo-number]").length ) {
				$(".customizer-demos [demo-number]").removeClass("active");
			}
		});

		<?php if( $consulting_config['layout'] == 'layout_1' ) : ?>
		if ($("body").hasClass('header_style_1')) {
			$("select[name='header_style'] option.header_style_1").attr("selected", "selected");
		}else if ($("body").hasClass('header_style_3')) {
			$("select[name='header_style'] option.header_style_3").attr("selected", "selected");
		}else if ($("body").hasClass('header_style_4')) {
			$("select[name='header_style'] option.header_style_4").attr("selected", "selected");
		}else{
			$("select[name='header_style'] option.header_style_2").attr("selected", "selected");
		}
		<?php endif; ?>

	});

</script>