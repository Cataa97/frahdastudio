<?php
	/*----------------------First highlight color-------------------*/

	$feminine_shop_first_color = get_theme_mod('feminine_shop_first_color');

	$feminine_shop_custom_css= "";

	if($feminine_shop_first_color != false){
		$feminine_shop_custom_css .='#slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, .more-btn a,#comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,nav.woocommerce-MyAccount-navigation ul li, .scrollup i, .pagination span, .pagination a, .widget_product_search button, .woocommerce ul.products li.product .price, .toggle-nav i, .wp-block-button__link, #preloader,.bradcrumbs a:hover, .bradcrumbs span, .post-categories li a:hover, nav.navigation.posts-navigation .nav-previous a, nav.navigation.posts-navigation .nav-next a, .wp-block-tag-cloud a:hover, .woocommerce a.added_to_cart, .wc-block-components-checkout-return-to-cart-button{';
			$feminine_shop_custom_css .='background-color: '.esc_attr($feminine_shop_first_color).';';
		$feminine_shop_custom_css .='}';
	}

	if($feminine_shop_first_color != false){
		$feminine_shop_custom_css .='.wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button,.wc-block-components-order-summary-item__quantity{';
			$feminine_shop_custom_css .='background-color: '.esc_attr($feminine_shop_first_color).' !important;';
		$feminine_shop_custom_css .='}';
	}

	if($feminine_shop_first_color != false){
		$feminine_shop_custom_css .='a, .top-bar p,.custom-social-icons i:hover,span.cart_no i,.more-btn a:hover,input[type="submit"]:hover,#comments input[type="submit"]:hover,#comments a.comment-reply-link:hover,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,#sidebar h3,.copyright p,.pagination .current,.pagination a:hover,#footer .tagcloud a:hover,#sidebar h3 a.rsswidget,#sidebar .tagcloud a:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce span.onsale,.widget_product_search button:hover, #slider .carousel-control-next-icon:hover,#slider .carousel-control-prev-icon:hover,#about-us strong, #about-us h3, .woocommerce div.product p.price, .woocommerce div.product span.price, #footer .wp-block-search .wp-block-search__button, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__label, #sidebar .wp-block-heading{';
			$feminine_shop_custom_css .='color: '.esc_attr($feminine_shop_first_color).';';
		$feminine_shop_custom_css .='}';
	}

	if($feminine_shop_first_color != false){
		$feminine_shop_custom_css .='.wp-block-button .wp-block-button__link:hover, nav.navigation.posts-navigation .nav-previous a:hover, nav.navigation.posts-navigation .nav-next a:hover{';
			$feminine_shop_custom_css .='color: '.esc_attr($feminine_shop_first_color).'!important;';
		$feminine_shop_custom_css .='}';
	}

	if($feminine_shop_first_color != false){
		$feminine_shop_custom_css .='.woocommerce ul.products li.product a img{';
			$feminine_shop_custom_css .='border-color: '.esc_attr($feminine_shop_first_color).';';
		$feminine_shop_custom_css .='}';
	}

	/*---------------- Second highlight color-------------------*/

	$feminine_shop_second_color = get_theme_mod('feminine_shop_second_color');

	if($feminine_shop_second_color != false){
		$feminine_shop_custom_css .='.top-bar,#footer-2,.main-inner-box span.entry-date,.custom-social-icons i:hover,span.cart_no i,input[type="submit"]:hover,#comments input[type="submit"]:hover,#comments a.comment-reply-link:hover,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,#sidebar h3,.pagination .current,.pagination a:hover,#footer .tagcloud a:hover,#sidebar .tagcloud a:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce span.onsale,.widget_product_search button:hover, .wp-block-button .wp-block-button__link:hover, #footer .wp-block-search .wp-block-search__button, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__label, nav.navigation.posts-navigation .nav-previous a:hover, nav.navigation.posts-navigation .nav-next a:hover, #sidebar .wp-block-heading,.woocommerce a.added_to_cart:hover, .wc-block-components-checkout-return-to-cart-button:hover{';
			$feminine_shop_custom_css .='background-color: '.esc_attr($feminine_shop_second_color).';';
		$feminine_shop_custom_css .='}';
	}

	if($feminine_shop_second_color != false){
		$feminine_shop_custom_css .='#footer .textwidget a,#footer li a:hover,.post-main-box:hover h3 a,#sidebar ul li a:hover,.post-navigation a:hover .post-title, .post-navigation a:focus .post-title,.post-navigation a:hover,.post-navigation a:focus, .logo .site-title a:hover, .post-main-box:hover h2 a, .post-main-box:hover .post-info a, .post-info:hover a{';
			$feminine_shop_custom_css .='color: '.esc_attr($feminine_shop_second_color).';';
		$feminine_shop_custom_css .='}';
	}

	if($feminine_shop_second_color != false){
		$feminine_shop_custom_css .='.more-btn a:hover{';
			$feminine_shop_custom_css .='box-shadow: inset 8em 0 0 0 '.esc_attr($feminine_shop_second_color).';';
		$feminine_shop_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$feminine_shop_theme_lay = get_theme_mod( 'feminine_shop_width_option','Full Width');
    if($feminine_shop_theme_lay == 'Boxed'){
		$feminine_shop_custom_css .='body{';
			$feminine_shop_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$feminine_shop_custom_css .='}';
		$feminine_shop_custom_css .='#slider .carousel-control-prev-icon{';
			$feminine_shop_custom_css .='border-width: 25px 163px 25px 0; top: 42px;';
		$feminine_shop_custom_css .='}';
		$feminine_shop_custom_css .='#slider .carousel-control-next-icon{';
			$feminine_shop_custom_css .='border-width: 25px 0 25px 170px; top: 42px;';
		$feminine_shop_custom_css .='}';
		$feminine_shop_custom_css .='.scrollup i{';
		  $feminine_shop_custom_css .='right: 100px;';
		$feminine_shop_custom_css .='}';
		$feminine_shop_custom_css .='.scrollup.left i{';
		  $feminine_shop_custom_css .='left: 100px;';
		$feminine_shop_custom_css .='}';
	}else if($feminine_shop_theme_lay == 'Wide Width'){
		$feminine_shop_custom_css .='body{';
			$feminine_shop_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$feminine_shop_custom_css .='}';
		$feminine_shop_custom_css .='.scrollup i{';
		  $feminine_shop_custom_css .='right: 30px;';
		$feminine_shop_custom_css .='}';
		$feminine_shop_custom_css .='.scrollup.left i{';
		  $feminine_shop_custom_css .='left: 30px;';
		$feminine_shop_custom_css .='}';
	}else if($feminine_shop_theme_lay == 'Full Width'){
		$feminine_shop_custom_css .='body{';
			$feminine_shop_custom_css .='max-width: 100%;';
		$feminine_shop_custom_css .='}';
	}

	/*------------------ Slider Content Layout -------------------*/

	$feminine_shop_slider_image = get_theme_mod('feminine_shop_slider_image');
	if($feminine_shop_slider_image != false){
		$feminine_shop_custom_css .='#slider{';
			$feminine_shop_custom_css .='background: url('.esc_url($feminine_shop_slider_image).');';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_theme_lay = get_theme_mod( 'feminine_shop_slider_content_option','Left');
    if($feminine_shop_theme_lay == 'Left'){
		$feminine_shop_custom_css .='#slider .carousel-caption{';
			$feminine_shop_custom_css .='text-align:left; right: 48%;';
		$feminine_shop_custom_css .='}';
	}else if($feminine_shop_theme_lay == 'Center'){
		$feminine_shop_custom_css .='#slider .carousel-caption{';
			$feminine_shop_custom_css .='text-align:center; right: 25%; left: 25%;';
		$feminine_shop_custom_css .='}';
	}else if($feminine_shop_theme_lay == 'Right'){
		$feminine_shop_custom_css .='#slider .carousel-caption{';
			$feminine_shop_custom_css .='text-align:right; right: 10%; left: 48%;';
		$feminine_shop_custom_css .='}';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$feminine_shop_slider_content_padding_top_bottom = get_theme_mod('feminine_shop_slider_content_padding_top_bottom');
	$feminine_shop_slider_content_padding_left_right = get_theme_mod('feminine_shop_slider_content_padding_left_right');
	if($feminine_shop_slider_content_padding_top_bottom != false || $feminine_shop_slider_content_padding_left_right != false){
		$feminine_shop_custom_css .='#slider .carousel-caption{';
			$feminine_shop_custom_css .='top: '.esc_attr($feminine_shop_slider_content_padding_top_bottom).'; bottom: '.esc_attr($feminine_shop_slider_content_padding_top_bottom).';left: '.esc_attr($feminine_shop_slider_content_padding_left_right).';right: '.esc_attr($feminine_shop_slider_content_padding_left_right).';';
		$feminine_shop_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$feminine_shop_slider_height = get_theme_mod('feminine_shop_slider_height');
	if($feminine_shop_slider_height != false){
		$feminine_shop_custom_css .='#slider img{';
			$feminine_shop_custom_css .='height: '.esc_attr($feminine_shop_slider_height).';';
		$feminine_shop_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$feminine_shop_theme_lay = get_theme_mod( 'feminine_shop_slider_opacity_color','0.7');
	if($feminine_shop_theme_lay == '0'){
		$feminine_shop_custom_css .='#slider img{';
			$feminine_shop_custom_css .='opacity:0';
		$feminine_shop_custom_css .='}';
		}else if($feminine_shop_theme_lay == '0.1'){
		$feminine_shop_custom_css .='#slider img{';
			$feminine_shop_custom_css .='opacity:0.1';
		$feminine_shop_custom_css .='}';
		}else if($feminine_shop_theme_lay == '0.2'){
		$feminine_shop_custom_css .='#slider img{';
			$feminine_shop_custom_css .='opacity:0.2';
		$feminine_shop_custom_css .='}';
		}else if($feminine_shop_theme_lay == '0.3'){
		$feminine_shop_custom_css .='#slider img{';
			$feminine_shop_custom_css .='opacity:0.3';
		$feminine_shop_custom_css .='}';
		}else if($feminine_shop_theme_lay == '0.4'){
		$feminine_shop_custom_css .='#slider img{';
			$feminine_shop_custom_css .='opacity:0.4';
		$feminine_shop_custom_css .='}';
		}else if($feminine_shop_theme_lay == '0.5'){
		$feminine_shop_custom_css .='#slider img{';
			$feminine_shop_custom_css .='opacity:0.5';
		$feminine_shop_custom_css .='}';
		}else if($feminine_shop_theme_lay == '0.6'){
		$feminine_shop_custom_css .='#slider img{';
			$feminine_shop_custom_css .='opacity:0.6';
		$feminine_shop_custom_css .='}';
		}else if($feminine_shop_theme_lay == '0.7'){
		$feminine_shop_custom_css .='#slider img{';
			$feminine_shop_custom_css .='opacity:0.7';
		$feminine_shop_custom_css .='}';
		}else if($feminine_shop_theme_lay == '0.8'){
		$feminine_shop_custom_css .='#slider img{';
			$feminine_shop_custom_css .='opacity:0.8';
		$feminine_shop_custom_css .='}';
		}else if($feminine_shop_theme_lay == '0.9'){
		$feminine_shop_custom_css .='#slider img{';
			$feminine_shop_custom_css .='opacity:0.9';
		$feminine_shop_custom_css .='}';
		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$feminine_shop_slider_image_overlay = get_theme_mod('feminine_shop_slider_image_overlay', true);
	if($feminine_shop_slider_image_overlay == false){
		$feminine_shop_custom_css .='#slider img{';
			$feminine_shop_custom_css .='opacity:1;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_slider_image_overlay_color = get_theme_mod('feminine_shop_slider_image_overlay_color', true);
	if($feminine_shop_slider_image_overlay_color != false){
		$feminine_shop_custom_css .='#slider{';
			$feminine_shop_custom_css .='background-color: '.esc_attr($feminine_shop_slider_image_overlay_color).';';
		$feminine_shop_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$feminine_shop_theme_lay = get_theme_mod( 'feminine_shop_blog_layout_option','Default');
    if($feminine_shop_theme_lay == 'Default'){
		$feminine_shop_custom_css .='.post-main-box{';
			$feminine_shop_custom_css .='';
		$feminine_shop_custom_css .='}';
	}else if($feminine_shop_theme_lay == 'Center'){
		$feminine_shop_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p{';
			$feminine_shop_custom_css .='text-align:center;';
		$feminine_shop_custom_css .='}';
		$feminine_shop_custom_css .='.post-info{';
			$feminine_shop_custom_css .='margin-top:10px;';
		$feminine_shop_custom_css .='}';
	}else if($feminine_shop_theme_lay == 'Left'){
		$feminine_shop_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, #our-services p{';
			$feminine_shop_custom_css .='text-align:Left;';
		$feminine_shop_custom_css .='}';
		$feminine_shop_custom_css .='.post-main-box h2{';
			$feminine_shop_custom_css .='margin-top:10px;';
		$feminine_shop_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$feminine_shop_blog_page_posts_settings = get_theme_mod( 'feminine_shop_blog_page_posts_settings','Into Blocks');
    if($feminine_shop_blog_page_posts_settings == 'Without Blocks'){
		$feminine_shop_custom_css .='.post-main-box{';
			$feminine_shop_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_related_image_box_shadow = get_theme_mod('feminine_shop_related_image_box_shadow',0);
    if($feminine_shop_related_image_box_shadow != false){
        $feminine_shop_custom_css .='.related-post .box-image img{';
            $feminine_shop_custom_css .='box-shadow: '.esc_attr($feminine_shop_related_image_box_shadow).'px '.esc_attr($feminine_shop_related_image_box_shadow).'px '.esc_attr($feminine_shop_related_image_box_shadow).'px #cccccc;';
        $feminine_shop_custom_css .='}';
    }

	/*--------------------- Grid Posts -------------------*/

	$feminine_shop_display_grid_posts_settings = get_theme_mod( 'feminine_shop_display_grid_posts_settings','Into Blocks');
    if($feminine_shop_display_grid_posts_settings == 'Without Blocks'){
		$feminine_shop_custom_css .='.grid-post-main-box{';
			$feminine_shop_custom_css .='box-shadow: none; border: none; margin:30px 0; background: none;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_grid_featured_image_box_shadow = get_theme_mod('feminine_shop_grid_featured_image_box_shadow',0);
	if($feminine_shop_grid_featured_image_box_shadow != false){
		$feminine_shop_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$feminine_shop_custom_css .='box-shadow: '.esc_attr($feminine_shop_grid_featured_image_box_shadow).'px '.esc_attr($feminine_shop_grid_featured_image_box_shadow).'px '.esc_attr($feminine_shop_grid_featured_image_box_shadow).'px #cccccc;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_grid_featured_image_border_radius = get_theme_mod('feminine_shop_grid_featured_image_border_radius', 0);
	if($feminine_shop_grid_featured_image_border_radius != false){
		$feminine_shop_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$feminine_shop_custom_css .='border-radius: '.esc_attr($feminine_shop_grid_featured_image_border_radius).'px;';
		$feminine_shop_custom_css .='}';
	}

	// featured image dimention
	$feminine_shop_blog_post_featured_image_dimension = get_theme_mod('feminine_shop_blog_post_featured_image_dimension', 'default');
	$feminine_shop_blog_post_featured_image_custom_width = get_theme_mod('feminine_shop_blog_post_featured_image_custom_width',250);
	$feminine_shop_blog_post_featured_image_custom_height = get_theme_mod('feminine_shop_blog_post_featured_image_custom_height',250);
	if($feminine_shop_blog_post_featured_image_dimension == 'custom'){
		$feminine_shop_custom_css .='.post-main-box img{';
			$feminine_shop_custom_css .='width: '.esc_attr($feminine_shop_blog_post_featured_image_custom_width).'; height: '.esc_attr($feminine_shop_blog_post_featured_image_custom_height).';';
		$feminine_shop_custom_css .='}';
	}


	/*----------------Responsive Media -----------------------*/

	$feminine_shop_resp_slider = get_theme_mod( 'feminine_shop_resp_slider_hide_show',true);
	if($feminine_shop_resp_slider == true && get_theme_mod( 'feminine_shop_slider_arrows', true) == false){
    	$feminine_shop_custom_css .='#slider{';
			$feminine_shop_custom_css .='display:none;';
		$feminine_shop_custom_css .='} ';
	}
    if($feminine_shop_resp_slider == true){
    	$feminine_shop_custom_css .='@media screen and (max-width:575px) {';
		$feminine_shop_custom_css .='#slider{';
			$feminine_shop_custom_css .='display:block;';
		$feminine_shop_custom_css .='} }';
	}else if($feminine_shop_resp_slider == false){
		$feminine_shop_custom_css .='@media screen and (max-width:575px) {';
		$feminine_shop_custom_css .='#slider{';
			$feminine_shop_custom_css .='display:none;';
		$feminine_shop_custom_css .='} }';
	}

	$feminine_shop_resp_sidebar = get_theme_mod( 'feminine_shop_sidebar_hide_show',true);
    if($feminine_shop_resp_sidebar == true){
    	$feminine_shop_custom_css .='@media screen and (max-width:575px) {';
		$feminine_shop_custom_css .='#sidebar{';
			$feminine_shop_custom_css .='display:block;';
		$feminine_shop_custom_css .='} }';
	}else if($feminine_shop_resp_sidebar == false){
		$feminine_shop_custom_css .='@media screen and (max-width:575px) {';
		$feminine_shop_custom_css .='#sidebar{';
			$feminine_shop_custom_css .='display:none;';
		$feminine_shop_custom_css .='} }';
	}

	$feminine_shop_resp_scroll_top = get_theme_mod( 'feminine_shop_resp_scroll_top_hide_show',true);
	if($feminine_shop_resp_scroll_top == true && get_theme_mod( 'feminine_shop_footer_scroll',true) != true){
    	$feminine_shop_custom_css .='.scrollup i{';
			$feminine_shop_custom_css .='visibility:hidden !important;';
		$feminine_shop_custom_css .='} ';
	}
    if($feminine_shop_resp_scroll_top == true){
    	$feminine_shop_custom_css .='@media screen and (max-width:575px) {';
		$feminine_shop_custom_css .='.scrollup i{';
			$feminine_shop_custom_css .='visibility:visible !important;';
		$feminine_shop_custom_css .='} }';
	}else if($feminine_shop_resp_scroll_top == false){
		$feminine_shop_custom_css .='@media screen and (max-width:575px){';
		$feminine_shop_custom_css .='.scrollup i{';
			$feminine_shop_custom_css .='visibility:hidden !important;';
		$feminine_shop_custom_css .='} }';
	}

	$feminine_shop_resp_menu_toggle_btn_bg_color = get_theme_mod('feminine_shop_resp_menu_toggle_btn_bg_color');
	if($feminine_shop_resp_menu_toggle_btn_bg_color != false){
		$feminine_shop_custom_css .='.toggle-nav i,.sidenav .closebtn{';
			$feminine_shop_custom_css .='background: '.esc_attr($feminine_shop_resp_menu_toggle_btn_bg_color).';';
		$feminine_shop_custom_css .='}';
	}

	/*---------------- Menus Settings ------------------*/

	$feminine_shop_navigation_menu_font_size = get_theme_mod('feminine_shop_navigation_menu_font_size');
	if($feminine_shop_navigation_menu_font_size != false){
		$feminine_shop_custom_css .='.main-navigation a{';
			$feminine_shop_custom_css .='font-size: '.esc_attr($feminine_shop_navigation_menu_font_size).';';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_header_menus_color = get_theme_mod('feminine_shop_header_menus_color');
	if($feminine_shop_header_menus_color != false){
		$feminine_shop_custom_css .='.main-navigation a{';
			$feminine_shop_custom_css .='color: '.esc_attr($feminine_shop_header_menus_color).';';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_header_menus_hover_color = get_theme_mod('feminine_shop_header_menus_hover_color');
	if($feminine_shop_header_menus_hover_color != false){
		$feminine_shop_custom_css .='.main-navigation a:hover, .main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a, .main-navigation a:hover{';
			$feminine_shop_custom_css .='color: '.esc_attr($feminine_shop_header_menus_hover_color).';';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_header_submenus_color = get_theme_mod('feminine_shop_header_submenus_color');
	if($feminine_shop_header_submenus_color != false){
		$feminine_shop_custom_css .='.main-navigation ul ul a{';
			$feminine_shop_custom_css .='color: '.esc_attr($feminine_shop_header_submenus_color).';';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_header_submenus_hover_color = get_theme_mod('feminine_shop_header_submenus_hover_color');
	if($feminine_shop_header_submenus_hover_color != false){
		$feminine_shop_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$feminine_shop_custom_css .='color: '.esc_attr($feminine_shop_header_submenus_hover_color).';';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_menus_item = get_theme_mod( 'feminine_shop_menus_item_style','None');
    if($feminine_shop_menus_item == 'None'){
		$feminine_shop_custom_css .='.main-navigation a{';
			$feminine_shop_custom_css .='';
		$feminine_shop_custom_css .='}';
	}else if($feminine_shop_menus_item == 'Zoom In'){
		$feminine_shop_custom_css .='.main-navigation a:hover{';
			$feminine_shop_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #384da6;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_navigation_menu_font_weight = get_theme_mod('feminine_shop_navigation_menu_font_weight','600');
	if($feminine_shop_navigation_menu_font_weight != false){
		$feminine_shop_custom_css .='.main-navigation a{';
			$feminine_shop_custom_css .='font-weight: '.esc_attr($feminine_shop_navigation_menu_font_weight).';';
		$feminine_shop_custom_css .='}';
	}
	
	$feminine_shop_theme_lay = get_theme_mod( 'feminine_shop_menu_text_transform','Uppercase');
	if($feminine_shop_theme_lay == 'Capitalize'){
		$feminine_shop_custom_css .='.main-navigation a{';
			$feminine_shop_custom_css .='text-transform:Capitalize;';
		$feminine_shop_custom_css .='}';
	}
	if($feminine_shop_theme_lay == 'Lowercase'){
		$feminine_shop_custom_css .='.main-navigation a{';
			$feminine_shop_custom_css .='text-transform:Lowercase;';
		$feminine_shop_custom_css .='}';
	}
	if($feminine_shop_theme_lay == 'Uppercase'){
		$feminine_shop_custom_css .='.main-navigation a{';
			$feminine_shop_custom_css .='text-transform:Uppercase;';
		$feminine_shop_custom_css .='}';
	}

	/*---------------- Posts Settings ------------------*/

	$feminine_shop_featured_image_border_radius = get_theme_mod('feminine_shop_featured_image_border_radius', 0);
	if($feminine_shop_featured_image_border_radius != false){
		$feminine_shop_custom_css .='.box-image img, .feature-box img{';
			$feminine_shop_custom_css .='border-radius: '.esc_attr($feminine_shop_featured_image_border_radius).'px;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_featured_image_box_shadow = get_theme_mod('feminine_shop_featured_image_box_shadow',0);
	if($feminine_shop_featured_image_box_shadow != false){
		$feminine_shop_custom_css .='.box-image img, #content-vw img{';
			$feminine_shop_custom_css .='box-shadow: '.esc_attr($feminine_shop_featured_image_box_shadow).'px '.esc_attr($feminine_shop_featured_image_box_shadow).'px '.esc_attr($feminine_shop_featured_image_box_shadow).'px #cccccc;';
		$feminine_shop_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$feminine_shop_button_border_radius = get_theme_mod('feminine_shop_button_border_radius');
	if($feminine_shop_button_border_radius != false){
		$feminine_shop_custom_css .='.post-main-box .more-btn a{';
			$feminine_shop_custom_css .='border-radius: '.esc_attr($feminine_shop_button_border_radius).'px;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_button_padding_top_bottom = get_theme_mod('feminine_shop_button_padding_top_bottom');
	$feminine_shop_button_padding_left_right = get_theme_mod('feminine_shop_button_padding_left_right');
	if($feminine_shop_button_padding_top_bottom != false || $feminine_shop_button_padding_left_right != false){
		$feminine_shop_custom_css .='.post-main-box .more-btn a{';
			$feminine_shop_custom_css .='padding-top: '.esc_attr($feminine_shop_button_padding_top_bottom).'!important; 
			padding-bottom: '.esc_attr($feminine_shop_button_padding_top_bottom).'!important;
			padding-left: '.esc_attr($feminine_shop_button_padding_left_right).'!important;
			padding-right: '.esc_attr($feminine_shop_button_padding_left_right).'!important;';
		$feminine_shop_custom_css .='}';
	}
	
	$feminine_shop_button_font_size = get_theme_mod('feminine_shop_button_font_size',14);
	$feminine_shop_custom_css .='.post-main-box .more-btn a{';
		$feminine_shop_custom_css .='font-size: '.esc_attr($feminine_shop_button_font_size).';';
	$feminine_shop_custom_css .='}';

	$feminine_shop_theme_lay = get_theme_mod( 'feminine_shop_button_text_transform','Uppercase');
	if($feminine_shop_theme_lay == 'Capitalize'){
		$feminine_shop_custom_css .='.post-main-box .more-btn a{';
			$feminine_shop_custom_css .='text-transform:Capitalize;';
		$feminine_shop_custom_css .='}';
	}
	if($feminine_shop_theme_lay == 'Lowercase'){
		$feminine_shop_custom_css .='.post-main-box .more-btn a{';
			$feminine_shop_custom_css .='text-transform:Lowercase;';
		$feminine_shop_custom_css .='}';
	}
	if($feminine_shop_theme_lay == 'Uppercase'){ 
		$feminine_shop_custom_css .='.post-main-box .more-btn a{';
			$feminine_shop_custom_css .='text-transform:Uppercase;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_button_letter_spacing = get_theme_mod('feminine_shop_button_letter_spacing');
	$feminine_shop_custom_css .='.post-main-box .more-btn a{';
		$feminine_shop_custom_css .='letter-spacing: '.esc_attr($feminine_shop_button_letter_spacing).';';
	$feminine_shop_custom_css .='}';

	/*---------------- Single Post Settings ------------------*/

	$feminine_shop_single_blog_comment_title = get_theme_mod('feminine_shop_single_blog_comment_title', 'Leave a Reply');
	if($feminine_shop_single_blog_comment_title == ''){
		$feminine_shop_custom_css .='#comments h2#reply-title {';
			$feminine_shop_custom_css .='display: none;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_single_blog_comment_button_text = get_theme_mod('feminine_shop_single_blog_comment_button_text', 'Post Comment');
	if($feminine_shop_single_blog_comment_button_text == ''){
		$feminine_shop_custom_css .='#comments p.form-submit {';
			$feminine_shop_custom_css .='display: none;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_singlepost_image_box_shadow = get_theme_mod('feminine_shop_singlepost_image_box_shadow',0);
	if($feminine_shop_singlepost_image_box_shadow != false){
		$feminine_shop_custom_css .='.feature-box img{';
			$feminine_shop_custom_css .='box-shadow: '.esc_attr($feminine_shop_singlepost_image_box_shadow).'px '.esc_attr($feminine_shop_singlepost_image_box_shadow).'px '.esc_attr($feminine_shop_singlepost_image_box_shadow).'px #cccccc;';
		$feminine_shop_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$feminine_shop_copyright_background_color = get_theme_mod('feminine_shop_copyright_background_color');
	if($feminine_shop_copyright_background_color != false){
		$feminine_shop_custom_css .='#footer-2{';
			$feminine_shop_custom_css .='background-color: '.esc_attr($feminine_shop_copyright_background_color).';';
		$feminine_shop_custom_css .='}';
	} 

	$feminine_shop_footer_widgets_heading = get_theme_mod( 'feminine_shop_footer_widgets_heading','Left');
    if($feminine_shop_footer_widgets_heading == 'Left'){
		$feminine_shop_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$feminine_shop_custom_css .='text-align: left;';
		$feminine_shop_custom_css .='}';
	}else if($feminine_shop_footer_widgets_heading == 'Center'){
		$feminine_shop_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$feminine_shop_custom_css .='text-align: center;';
		$feminine_shop_custom_css .='}';
	}else if($feminine_shop_footer_widgets_heading == 'Right'){
		$feminine_shop_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$feminine_shop_custom_css .='text-align: right;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_footer_widgets_content = get_theme_mod( 'feminine_shop_footer_widgets_content','Left');
    if($feminine_shop_footer_widgets_content == 'Left'){
		$feminine_shop_custom_css .='#footer .widget{';
		$feminine_shop_custom_css .='text-align: left;';
		$feminine_shop_custom_css .='}';
	}else if($feminine_shop_footer_widgets_content == 'Center'){
		$feminine_shop_custom_css .='#footer .widget{';
			$feminine_shop_custom_css .='text-align: center;';
		$feminine_shop_custom_css .='}';
	}else if($feminine_shop_footer_widgets_content == 'Right'){
		$feminine_shop_custom_css .='#footer .widget{';
			$feminine_shop_custom_css .='text-align: right;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_footer_background_color = get_theme_mod('feminine_shop_footer_background_color');
	if($feminine_shop_footer_background_color != false){
		$feminine_shop_custom_css .='#footer{';
			$feminine_shop_custom_css .='background-color: '.esc_attr($feminine_shop_footer_background_color).';';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_copyright_font_size = get_theme_mod('feminine_shop_copyright_font_size');
	if($feminine_shop_copyright_font_size != false){
		$feminine_shop_custom_css .='.copyright p{';
			$feminine_shop_custom_css .='font-size: '.esc_attr($feminine_shop_copyright_font_size).';';
		$feminine_shop_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/
	$feminine_shop_copyright_alignment = get_theme_mod('feminine_shop_copyright_alignment');
	if($feminine_shop_copyright_alignment != false){
		$feminine_shop_custom_css .='.copyright p,#footer-2 p{';
			$feminine_shop_custom_css .='text-align: '.esc_attr($feminine_shop_copyright_alignment).';';
		$feminine_shop_custom_css .='}';
		$feminine_shop_custom_css .='
		@media screen and (max-width:720px) {
			.copyright p,#footer-2 p{';
			$feminine_shop_custom_css .='text-align: center;} }';
	}

	$feminine_shop_align_footer_social_icon = get_theme_mod('feminine_shop_align_footer_social_icon');
	if($feminine_shop_align_footer_social_icon != false){
		$feminine_shop_custom_css .='.copyright .widget{';
			$feminine_shop_custom_css .='text-align: '.esc_attr($feminine_shop_align_footer_social_icon).';';
		$feminine_shop_custom_css .='}';
		$feminine_shop_custom_css .='
		@media screen and (max-width:720px) {
			.copyright .widget{';
			$feminine_shop_custom_css .='text-align: center;} }';
	}

	$feminine_shop_footer_padding = get_theme_mod('feminine_shop_footer_padding');
	if($feminine_shop_footer_padding != false){
		$feminine_shop_custom_css .='#footer{';
			$feminine_shop_custom_css .='padding: '.esc_attr($feminine_shop_footer_padding).' 0;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_footer_icon = get_theme_mod('feminine_shop_footer_icon');
	if($feminine_shop_footer_icon == false){
		$feminine_shop_custom_css .='.copyright p{';
			$feminine_shop_custom_css .='width:100%; text-align:center; float:none;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_footer_background_image = get_theme_mod('feminine_shop_footer_background_image');
	if($feminine_shop_footer_background_image != false){
		$feminine_shop_custom_css .='#footer{';
			$feminine_shop_custom_css .='background: url('.esc_attr($feminine_shop_footer_background_image).');background-size:cover;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_theme_lay = get_theme_mod( 'feminine_shop_img_footer','scroll');
	if($feminine_shop_theme_lay == 'fixed'){
		$feminine_shop_custom_css .='#footer{';
			$feminine_shop_custom_css .='background-attachment: fixed !important;';
		$feminine_shop_custom_css .='}';
	}elseif ($feminine_shop_theme_lay == 'scroll'){
		$feminine_shop_custom_css .='#footer{';
			$feminine_shop_custom_css .='background-attachment: scroll !important;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_footer_img_position = get_theme_mod('feminine_shop_footer_img_position','center center');
	if($feminine_shop_footer_img_position != false){
		$feminine_shop_custom_css .='#footer{';
			$feminine_shop_custom_css .='background-position: '.esc_attr($feminine_shop_footer_img_position).'!important;';
		$feminine_shop_custom_css .='}';
	} 

	$feminine_shop_single_blog_post_navigation_show_hide = get_theme_mod('feminine_shop_single_blog_post_navigation_show_hide',true);
	if($feminine_shop_single_blog_post_navigation_show_hide != true){
		$feminine_shop_custom_css .='.post-navigation{';
			$feminine_shop_custom_css .='display: none;';
		$feminine_shop_custom_css .='}';
	}

	/*--------------Woocommerce Products Settings -----------*/

	$feminine_shop_related_product_show_hide = get_theme_mod('feminine_shop_related_product_show_hide',true);
	if($feminine_shop_related_product_show_hide != true){
		$feminine_shop_custom_css .='.related.products{';
			$feminine_shop_custom_css .='display: none;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_products_btn_padding_top_bottom = get_theme_mod('feminine_shop_products_btn_padding_top_bottom');
	if($feminine_shop_products_btn_padding_top_bottom != false){
		$feminine_shop_custom_css .='.woocommerce a.button{';
			$feminine_shop_custom_css .='padding-top: '.esc_attr($feminine_shop_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($feminine_shop_products_btn_padding_top_bottom).' !important;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_products_btn_padding_left_right = get_theme_mod('feminine_shop_products_btn_padding_left_right');
	if($feminine_shop_products_btn_padding_left_right != false){
		$feminine_shop_custom_css .='.woocommerce a.button{';
			$feminine_shop_custom_css .='padding-left: '.esc_attr($feminine_shop_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($feminine_shop_products_btn_padding_left_right).' !important;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_woocommerce_sale_position = get_theme_mod( 'feminine_shop_woocommerce_sale_position','left');
    if($feminine_shop_woocommerce_sale_position == 'left'){
		$feminine_shop_custom_css .='.woocommerce ul.products li.product .onsale{';
			$feminine_shop_custom_css .='left: -10px; right: auto;';
		$feminine_shop_custom_css .='}';
	}else if($feminine_shop_woocommerce_sale_position == 'right'){
		$feminine_shop_custom_css .='.woocommerce ul.products li.product .onsale{';
			$feminine_shop_custom_css .='left: auto !important; right: 15px !important;';
		$feminine_shop_custom_css .='}';
		$feminine_shop_custom_css .='.woocommerce ul.products li.product .price{';
			$feminine_shop_custom_css .='right: auto !important; left: 0 !important; border-radius: 8px 0 8px 0;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_woocommerce_sale_padding_top_bottom = get_theme_mod('feminine_shop_woocommerce_sale_padding_top_bottom');
	if($feminine_shop_woocommerce_sale_padding_top_bottom != false){
		$feminine_shop_custom_css .='.woocommerce span.onsale{';
			$feminine_shop_custom_css .='padding-top: '.esc_attr($feminine_shop_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($feminine_shop_woocommerce_sale_padding_top_bottom).';';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_woocommerce_sale_padding_left_right = get_theme_mod('feminine_shop_woocommerce_sale_padding_left_right');
	if($feminine_shop_woocommerce_sale_padding_left_right != false){
		$feminine_shop_custom_css .='.woocommerce span.onsale{';
			$feminine_shop_custom_css .='padding-left: '.esc_attr($feminine_shop_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($feminine_shop_woocommerce_sale_padding_left_right).';';
		$feminine_shop_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$feminine_shop_logo_padding = get_theme_mod('feminine_shop_logo_padding');
	if($feminine_shop_logo_padding != false){
		$feminine_shop_custom_css .='.logo{';
			$feminine_shop_custom_css .='padding: '.esc_attr($feminine_shop_logo_padding).';';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_logo_margin = get_theme_mod('feminine_shop_logo_margin');
	if($feminine_shop_logo_margin != false){
		$feminine_shop_custom_css .='.logo{';
			$feminine_shop_custom_css .='margin: '.esc_attr($feminine_shop_logo_margin).';';
		$feminine_shop_custom_css .='}';
	}

	// Site title Font Size
	$feminine_shop_site_title_font_size = get_theme_mod('feminine_shop_site_title_font_size');
	if($feminine_shop_site_title_font_size != false){
		$feminine_shop_custom_css .='.logo h1, .logo p.site-title{';
			$feminine_shop_custom_css .='font-size: '.esc_attr($feminine_shop_site_title_font_size).';';
		$feminine_shop_custom_css .='}';
	}

	// Site tagline Font Size
	$feminine_shop_site_tagline_font_size = get_theme_mod('feminine_shop_site_tagline_font_size');
	if($feminine_shop_site_tagline_font_size != false){
		$feminine_shop_custom_css .='.logo p.site-description{';
			$feminine_shop_custom_css .='font-size: '.esc_attr($feminine_shop_site_tagline_font_size).';';
		$feminine_shop_custom_css .='}';
	}

	/*------------------ Preloader Background Color  -------------------*/

	$feminine_shop_preloader_bg_color = get_theme_mod('feminine_shop_preloader_bg_color');
	if($feminine_shop_preloader_bg_color != false){
		$feminine_shop_custom_css .='#preloader{';
			$feminine_shop_custom_css .='background-color: '.esc_attr($feminine_shop_preloader_bg_color).';';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_preloader_border_color = get_theme_mod('feminine_shop_preloader_border_color');
	if($feminine_shop_preloader_border_color != false){
		$feminine_shop_custom_css .='.loader-line{';
			$feminine_shop_custom_css .='border-color: '.esc_attr($feminine_shop_preloader_border_color).'!important;';
		$feminine_shop_custom_css .='}';
	}
	
	$feminine_shop_preloader_bg_img = get_theme_mod('feminine_shop_preloader_bg_img');
	if($feminine_shop_preloader_bg_img != false){
		$feminine_shop_custom_css .='#preloader{';
			$feminine_shop_custom_css .='background: url('.esc_attr($feminine_shop_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$feminine_shop_custom_css .='}';
	}

	// Header Background Color
	$feminine_shop_header_background_color = get_theme_mod('feminine_shop_header_background_color');
	if($feminine_shop_header_background_color != false){
		$feminine_shop_custom_css .='.middle-bar{';
			$feminine_shop_custom_css .='background-color: '.esc_attr($feminine_shop_header_background_color).';';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_header_img_position = get_theme_mod('feminine_shop_header_img_position','center top');
	if($feminine_shop_header_img_position != false){
		$feminine_shop_custom_css .='.middle-bar{';
			$feminine_shop_custom_css .='background-position: '.esc_attr($feminine_shop_header_img_position).'!important;';
		$feminine_shop_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$feminine_shop_scroll_to_top_font_size = get_theme_mod('feminine_shop_scroll_to_top_font_size');
	if($feminine_shop_scroll_to_top_font_size != false){
		$feminine_shop_custom_css .='.scrollup i{';
			$feminine_shop_custom_css .='font-size: '.esc_attr($feminine_shop_scroll_to_top_font_size).';';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_scroll_to_top_padding = get_theme_mod('feminine_shop_scroll_to_top_padding');
	$feminine_shop_scroll_to_top_padding = get_theme_mod('feminine_shop_scroll_to_top_padding');
	if($feminine_shop_scroll_to_top_padding != false){
		$feminine_shop_custom_css .='.scrollup i{';
			$feminine_shop_custom_css .='padding-top: '.esc_attr($feminine_shop_scroll_to_top_padding).'!important;padding-bottom: '.esc_attr($feminine_shop_scroll_to_top_padding).'!important;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_scroll_to_top_width = get_theme_mod('feminine_shop_scroll_to_top_width');
	if($feminine_shop_scroll_to_top_width != false){
		$feminine_shop_custom_css .='.scrollup i{';
			$feminine_shop_custom_css .='width: '.esc_attr($feminine_shop_scroll_to_top_width).';';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_scroll_to_top_height = get_theme_mod('feminine_shop_scroll_to_top_height');
	if($feminine_shop_scroll_to_top_height != false){
		$feminine_shop_custom_css .='.scrollup i{';
			$feminine_shop_custom_css .='height: '.esc_attr($feminine_shop_scroll_to_top_height).';';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_scroll_to_top_border_radius = get_theme_mod('feminine_shop_scroll_to_top_border_radius');
	if($feminine_shop_scroll_to_top_border_radius != false){
		$feminine_shop_custom_css .='.scrollup i{';
			$feminine_shop_custom_css .='border-radius: '.esc_attr($feminine_shop_scroll_to_top_border_radius).'px;';
		$feminine_shop_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$feminine_shop_social_icon_font_size = get_theme_mod('feminine_shop_social_icon_font_size');
	if($feminine_shop_social_icon_font_size != false){
		$feminine_shop_custom_css .='#sidebar .custom-social-icons i, #footer-2 .custom-social-icons i{';
			$feminine_shop_custom_css .='font-size: '.esc_attr($feminine_shop_social_icon_font_size).';';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_social_icon_padding = get_theme_mod('feminine_shop_social_icon_padding');
	if($feminine_shop_social_icon_padding != false){
		$feminine_shop_custom_css .='#sidebar .custom-social-icons i, #footer-2 .custom-social-icons i{';
			$feminine_shop_custom_css .='padding: '.esc_attr($feminine_shop_social_icon_padding).';';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_social_icon_width = get_theme_mod('feminine_shop_social_icon_width');
	if($feminine_shop_social_icon_width != false){
		$feminine_shop_custom_css .='#sidebar .custom-social-icons i, #footer-2 .custom-social-icons i{';
			$feminine_shop_custom_css .='width: '.esc_attr($feminine_shop_social_icon_width).';';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_social_icon_height = get_theme_mod('feminine_shop_social_icon_height');
	if($feminine_shop_social_icon_height != false){
		$feminine_shop_custom_css .='#sidebar .custom-social-icons i, #footer-2 .custom-social-icons i{';
			$feminine_shop_custom_css .='height: '.esc_attr($feminine_shop_social_icon_height).';';
		$feminine_shop_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$feminine_shop_button_footer_heading_letter_spacing = get_theme_mod('feminine_shop_button_footer_heading_letter_spacing',1);
	$feminine_shop_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label, a.rsswidget.rss-widget-title{';
		$feminine_shop_custom_css .='letter-spacing: '.esc_attr($feminine_shop_button_footer_heading_letter_spacing).'px;';
	$feminine_shop_custom_css .='}';

	$feminine_shop_button_footer_font_size = get_theme_mod('feminine_shop_button_footer_font_size','25');
	$feminine_shop_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label, a.rsswidget.rss-widget-title{';
		$feminine_shop_custom_css .='font-size: '.esc_attr($feminine_shop_button_footer_font_size).'px;';
	$feminine_shop_custom_css .='}';

	$feminine_shop_theme_lay = get_theme_mod( 'feminine_shop_button_footer_text_transform','Capitalize');
	if($feminine_shop_theme_lay == 'Capitalize'){
		$feminine_shop_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$feminine_shop_custom_css .='text-transform:Capitalize;';
		$feminine_shop_custom_css .='}';
	}
	if($feminine_shop_theme_lay == 'Lowercase'){
		$feminine_shop_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label, a.rsswidget.rss-widget-title{';
			$feminine_shop_custom_css .='text-transform:Lowercase;';
		$feminine_shop_custom_css .='}';
	}
	if($feminine_shop_theme_lay == 'Uppercase'){
		$feminine_shop_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label, a.rsswidget.rss-widget-title{';
			$feminine_shop_custom_css .='text-transform:Uppercase;';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_footer_heading_weight = get_theme_mod('feminine_shop_footer_heading_weight','500');
	if($feminine_shop_footer_heading_weight != false){
		$feminine_shop_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label, a.rsswidget.rss-widget-title{';
			$feminine_shop_custom_css .='font-weight: '.esc_attr($feminine_shop_footer_heading_weight).';';
		$feminine_shop_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$feminine_shop_theme_lay = get_theme_mod( 'feminine_shop_footer_template','feminine_shop-footer-one');
    if($feminine_shop_theme_lay == 'feminine_shop-footer-one'){
		$feminine_shop_custom_css .='#footer{';
			$feminine_shop_custom_css .='';
		$feminine_shop_custom_css .='}';

	}else if($feminine_shop_theme_lay == 'feminine_shop-footer-two'){
		$feminine_shop_custom_css .='#footer{';
			$feminine_shop_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$feminine_shop_custom_css .='}';
		$feminine_shop_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$feminine_shop_custom_css .='color:#000;';
		$feminine_shop_custom_css .='}';
		$feminine_shop_custom_css .='#footer ul li::before{';
			$feminine_shop_custom_css .='background:#000;';
		$feminine_shop_custom_css .='}';
		$feminine_shop_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$feminine_shop_custom_css .='border: 1px solid #000;';
		$feminine_shop_custom_css .='}';

	}else if($feminine_shop_theme_lay == 'feminine_shop-footer-three'){
		$feminine_shop_custom_css .='#footer{';
			$feminine_shop_custom_css .='background: #232524;';
		$feminine_shop_custom_css .='}';
	}
	else if($feminine_shop_theme_lay == 'feminine_shop-footer-four'){
		$feminine_shop_custom_css .='#footer{';
			$feminine_shop_custom_css .='background: #f7f7f7;';
		$feminine_shop_custom_css .='}';
		$feminine_shop_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$feminine_shop_custom_css .='color:#000;';
		$feminine_shop_custom_css .='}';
		$feminine_shop_custom_css .='#footer ul li::before{';
			$feminine_shop_custom_css .='background:#000;';
		$feminine_shop_custom_css .='}';
		$feminine_shop_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$feminine_shop_custom_css .='border: 1px solid #000;';
		$feminine_shop_custom_css .='}';
	}
	else if($feminine_shop_theme_lay == 'feminine_shop-footer-five'){
		$feminine_shop_custom_css .='#footer{';
			$feminine_shop_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$feminine_shop_custom_css .='}';
	}

	$feminine_shop_responsive_preloader_hide = get_theme_mod('feminine_shop_responsive_preloader_hide',false);
	if($feminine_shop_responsive_preloader_hide == true && get_theme_mod('feminine_shop_loader_enable',false) == false){
		$feminine_shop_custom_css .='@media screen and (min-width:575px){
			#preloader{';
			$feminine_shop_custom_css .='display:none !important;';
		$feminine_shop_custom_css .='} }';
	}

	if($feminine_shop_responsive_preloader_hide == false){
		$feminine_shop_custom_css .='@media screen and (max-width:575px){
			#preloader{';
			$feminine_shop_custom_css .='display:none !important;';
		$feminine_shop_custom_css .='} }';
	}

	$feminine_shop_resp_topbar = get_theme_mod( 'feminine_shop_resp_topbar_hide_show',true);
	if($feminine_shop_resp_topbar == true && get_theme_mod( 'feminine_shop_hide_show_topbar_section', true) == false){
    	$feminine_shop_custom_css .='.top-bar{';
			$feminine_shop_custom_css .='display:none;';
		$feminine_shop_custom_css .='} ';
	}
    if($feminine_shop_resp_topbar == true){
    	$feminine_shop_custom_css .='@media screen and (max-width:575px) {';
		$feminine_shop_custom_css .='.top-bar{';
			$feminine_shop_custom_css .='display:block;';
		$feminine_shop_custom_css .='} }';
	}else if($feminine_shop_resp_topbar == false){
		$feminine_shop_custom_css .='@media screen and (max-width:575px) {';
		$feminine_shop_custom_css .='.top-bar{';
			$feminine_shop_custom_css .='display:none;';
		$feminine_shop_custom_css .='} }';
	}

	$feminine_shop_resp_stickyheader = get_theme_mod( 'feminine_shop_stickyheader_hide_show',false);
	if($feminine_shop_resp_stickyheader == true && get_theme_mod( 'feminine_shop_sticky_header',false) != true){
    	$feminine_shop_custom_css .='.header-fixed{';
			$feminine_shop_custom_css .='position:static;';
		$feminine_shop_custom_css .='} ';
	}
    if($feminine_shop_resp_stickyheader == true){
    	$feminine_shop_custom_css .='@media screen and (max-width:575px) {';
		$feminine_shop_custom_css .='.header-fixed{';
			$feminine_shop_custom_css .='position:fixed;';
		$feminine_shop_custom_css .='} }';
	}else if($feminine_shop_resp_stickyheader == false){
		$feminine_shop_custom_css .='@media screen and (max-width:575px){';
		$feminine_shop_custom_css .='.header-fixed{';
			$feminine_shop_custom_css .='position:static;';
		$feminine_shop_custom_css .='} }';
	}

	$feminine_shop_bradcrumbs_alignment = get_theme_mod( 'feminine_shop_bradcrumbs_alignment','Left');
    if($feminine_shop_bradcrumbs_alignment == 'Left'){
    	$feminine_shop_custom_css .='@media screen and (min-width:768px) {';
		$feminine_shop_custom_css .='.bradcrumbs{';
			$feminine_shop_custom_css .='text-align:start;';
		$feminine_shop_custom_css .='}}';
	}else if($feminine_shop_bradcrumbs_alignment == 'Center'){
		$feminine_shop_custom_css .='@media screen and (min-width:768px) {';
		$feminine_shop_custom_css .='.bradcrumbs{';
			$feminine_shop_custom_css .='text-align:center;';
		$feminine_shop_custom_css .='}}';
	}else if($feminine_shop_bradcrumbs_alignment == 'Right'){
		$feminine_shop_custom_css .='@media screen and (min-width:768px) {';
		$feminine_shop_custom_css .='.bradcrumbs{';
			$feminine_shop_custom_css .='text-align:end;';
		$feminine_shop_custom_css .='}}';
	}