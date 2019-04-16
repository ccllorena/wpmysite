<?php
/**
 * Implements styles set in the theme customizer
 *
 * @package Customizer Library Demo
 */

if ( ! function_exists( 'customizer_library_topshop_build_styles' ) && class_exists( 'Customizer_Library_Styles' ) ) :
/**
 * Process user options to generate CSS needed to implement the choices.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function customizer_library_topshop_build_styles() {

    $websafe = ( get_theme_mod( 'topshop-disable-google-fonts', customizer_library_get_default( 'topshop-disable-google-fonts' ) ) == 1 ) ? '-websafe' : '';
    
    // Site Logo Max Width
    $setting = 'topshop-header-image-logo-max-width';
    $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

    if ( $mod !== customizer_library_get_default( $setting ) ) {

        $logo_max_width = esc_attr( $mod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                'a.site-logo-img'
            ),
            'declarations' => array(
                'max-width' => $logo_max_width . 'px'
            )
        ) );
    }
    
    // Main Color
    $color = 'topshop-main-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    
    $bgcolormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    $bghardcolormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    $bgbordercolormod = get_theme_mod( $color, customizer_library_get_default( $color ) );

    if ( $colormod !== customizer_library_get_default( $color ) ) {

        $sancolor = sanitize_hex_color( $colormod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                'a,
                .search-btn,
                .social-icon:hover,
                .site-title a,
                .error-404.not-found .page-header .page-title span,
                .search-button .fa-search'
            ),
            'declarations' => array(
                'color' => $sancolor
            )
        ) );
    }
    
    if ( $bgcolormod !== customizer_library_get_default( $color ) ) {

        $bgsancolor = sanitize_hex_color( $bgcolormod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '#comments .form-submit #submit,
                .search-block .search-submit,
                .no-results-btn,
                button,
                input[type="button"],
                input[type="reset"],
                input[type="submit"],
                .home-slider-prev,
                .home-slider-next,
                .woocommerce ul.products li.product a.add_to_cart_button, .woocommerce-page ul.products li.product a.add_to_cart_button,
                .woocommerce ul.products li.product .onsale, .woocommerce-page ul.products li.product .onsale,
                .woocommerce button.button.alt,
                .woocommerce-page button.button.alt,
                .woocommerce input.button.alt:hover,
                .woocommerce-page #content input.button.alt:hover,
                .woocommerce .cart-collaterals .shipping_calculator .button,
                .woocommerce-page .cart-collaterals .shipping_calculator .button,
                .woocommerce a.button,
                .woocommerce-page a.button,
                .woocommerce input.button,
                .woocommerce-page #content input.button,
                .woocommerce-page input.button,
                .woocommerce #review_form #respond .form-submit input,
                .woocommerce-page #review_form #respond .form-submit input,
                .woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
                .single-product span.onsale,
                .header-cart:hover .header-cart-checkout .fa,
                .main-navigation a:hover,
                .main-navigation li.current-menu-item > a,
                .main-navigation li.current_page_item > a,
                .main-navigation li.current-menu-parent > a,
                .main-navigation li.current_page_parent > a,
                .main-navigation li.current-menu-ancestor > a,
                .main-navigation li.current_page_ancestor > a,
                .main-navigation button,
                .wpcf7-submit'
            ),
            'declarations' => array(
                'background' => 'inherit',
                'background-color' => $bgsancolor
            )
        ) );
    }
    
    if ( $bghardcolormod !== customizer_library_get_default( $color ) ) {

        $bghardsancolor = sanitize_hex_color( $bghardcolormod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.header-cart-checkout.cart-has-items .fa-shopping-cart'
            ),
            'declarations' => array(
                'background-color' => $bghardsancolor . ' !important'
            )
        ) );
    }
    
    if ( $bgbordercolormod !== customizer_library_get_default( $color ) ) {

        $bgbordersancolor = sanitize_hex_color( $bgbordercolormod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.woocommerce ul.products li.product .onsale:after,
                .woocommerce-page ul.products li.product .onsale:after'
            ),
            'declarations' => array(
                'border-right' => '4px solid ' . $bgbordersancolor
            )
        ) );
    }

    // Main Color Hover
    $colorh = 'topshop-main-color-hover';
    $colorhmod = get_theme_mod( $colorh, customizer_library_get_default( $colorh ) );
    
    $bgcolorhmod = get_theme_mod( $colorh, customizer_library_get_default( $colorh ) );

    if ( $colorhmod !== customizer_library_get_default( $colorh ) ) {

        $sancolorh = sanitize_hex_color( $colorhmod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                'a:hover,
                .widget-area .widget a:hover,
                .site-footer-widgets .widget ul li a:hover,
                .search-btn:hover,
                .search-button .fa-search:hover,
                .woocommerce #content div.product p.price,
                .woocommerce-page #content div.product p.price,
                .woocommerce-page div.product p.price,
                .woocommerce #content div.product span.price,
                .woocommerce div.product span.price,
                .woocommerce-page #content div.product span.price,
                .woocommerce-page div.product span.price,
                .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active,
                .woocommerce div.product .woocommerce-tabs ul.tabs li.active,
                .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active,
                .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active'
            ),
            'declarations' => array(
                'color' => $sancolorh
            )
        ) );
    }
    
    if ( $bgcolorhmod !== customizer_library_get_default( $colorh ) ) {

        $bgsancolorh = sanitize_hex_color( $bgcolorhmod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.main-navigation button:hover,
                #comments .form-submit #submit:hover,
                .search-block .search-submit:hover,
                .no-results-btn:hover,
                button,
                input[type="button"],
                input[type="reset"],
                input[type="submit"],
                .home-slider-prev:hover,
                .home-slider-next:hover,
                .woocommerce input.button.alt,
                .woocommerce-page #content input.button.alt,
                .woocommerce .cart-collaterals .shipping_calculator .button,
                .woocommerce-page .cart-collaterals .shipping_calculator .button,
                .woocommerce a.button:hover,
                .woocommerce-page a.button:hover,
                .woocommerce input.button:hover,
                .woocommerce-page #content input.button:hover,
                .woocommerce-page input.button:hover,
                .woocommerce ul.products li.product a.add_to_cart_button:hover, .woocommerce-page ul.products li.product a.add_to_cart_button:hover,
                .woocommerce button.button.alt:hover,
                .woocommerce-page button.button.alt:hover,
                .woocommerce #review_form #respond .form-submit input:hover,
                .woocommerce-page #review_form #respond .form-submit input:hover,
                .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
                .wpcf7-submit:hover'
            ),
            'declarations' => array(
                'background' => 'inherit',
                'background-color' => $bgsancolorh
            )
        ) );
    }


    // Body Font
    $font = 'topshop-body-font'.$websafe;
    $fontmod = get_theme_mod( $font, customizer_library_get_default( $font ) );
    if ( $websafe ) {
		$fontstack = '\''.$fontmod.'\', sans-serif';
	} else {
		$fontstack = customizer_library_get_font_stack( $fontmod );
	}
    
    $fontcolor = 'topshop-body-font-color';
    $fontcolormod = get_theme_mod( $fontcolor, customizer_library_get_default( $fontcolor ) );

    if ( $fontmod != customizer_library_get_default( $font ) || get_theme_mod( 'topshop-disable-google-fonts' ) == 1 ) {

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                'body'
            ),
            'declarations' => array(
                'font-family' => $fontstack
            )
        ) );

    }
    
    if ( $fontcolormod !== customizer_library_get_default( $fontcolor ) ) {

        $sanfontcolor = sanitize_hex_color( $fontcolormod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                'body,
                .widget-area .widget a,
                .site-footer-widgets a'
            ),
            'declarations' => array(
                'color' => $sanfontcolor
            )
        ) );
    }
    
    
    // Heading Font
    $hfont = 'topshop-heading-font'.$websafe;
    $hfontmod = get_theme_mod( $hfont, customizer_library_get_default( $hfont ) );
    if ( $websafe ) {
		$hfontstack = '\''.$hfontmod.'\', sans-serif';
	} else {
		$hfontstack = customizer_library_get_font_stack( $hfontmod );
	}
    
    $hfontcolor = 'topshop-heading-font-color';
    $hfontcolormod = get_theme_mod( $hfontcolor, customizer_library_get_default( $hfontcolor ) );

    if ( $hfontmod != customizer_library_get_default( $hfont ) || get_theme_mod( 'topshop-disable-google-fonts' ) == 1 ) {

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                'h1, h2, h3, h4, h5, h6,
                h1 a, h2 a, h3 a, h4 a, h5 a, h6 a,
                .woocommerce table.cart th,
                .woocommerce-page #content table.cart th,
                .woocommerce-page table.cart th,
                .woocommerce input.button.alt,
                .woocommerce-page #content input.button.alt,
                .woocommerce table.cart input,
                .woocommerce-page #content table.cart input,
                .woocommerce-page table.cart input,
                button, input[type="button"],
                input[type="reset"],
                input[type="submit"]'
            ),
            'declarations' => array(
                'font-family' => $hfontstack
            )
        ) );

    }
    
    if ( $hfontcolormod !== customizer_library_get_default( $hfontcolor ) ) {

        $sanhfontcolor = sanitize_hex_color( $hfontcolormod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                'h1, h2, h3, h4, h5, h6,
                h1 a, h2 a, h3 a, h4 a, h5 a, h6 a'
            ),
            'declarations' => array(
                'color' => $sanhfontcolor
            )
        ) );
    }
    
    // Header Colors
    $setting = 'topshop-header-bg-color';
    $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

    if ( $mod !== customizer_library_get_default( $setting ) ) {

        $color = sanitize_hex_color( $mod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.site-header,
                .topshop-header-layout-standard .site-top-bar-left,
                .topshop-header-layout-standard .site-top-bar-right,
                .topshop-header-layout-centered .site-top-bar-left,
                .topshop-header-layout-centered .site-top-bar-right,
                .topshop-header-layout-three .site-top-bar-left,
                .topshop-header-layout-three .site-top-bar-right'
            ),
            'declarations' => array(
                'background-color' => $color
            )
        ) );
    }
    $setting = 'topshop-header-font-color';
    $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

    if ( $mod !== customizer_library_get_default( $setting ) ) {

        $color = sanitize_hex_color( $mod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.site-header'
            ),
            'declarations' => array(
                'color' => $color
            )
        ) );
    }
    // Header Top Bar Colors
    $setting = 'topshop-topbar-bg-color';
    $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

    if ( $mod !== customizer_library_get_default( $setting ) ) {

        $color = sanitize_hex_color( $mod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.site-top-bar,
                .topshop-header-layout-standard .site-top-bar-left,
                .topshop-header-layout-standard .site-top-bar-right,
                .topshop-header-layout-centered .site-top-bar-left,
                .topshop-header-layout-centered .site-top-bar-right,
                .topshop-header-layout-three .site-top-bar-left,
                .topshop-header-layout-three .site-top-bar-right'
            ),
            'declarations' => array(
                'background-color' => $color
            )
        ) );
    }
    $setting = 'topshop-topbar-font-color';
    $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

    if ( $mod !== customizer_library_get_default( $setting ) ) {

        $color = sanitize_hex_color( $mod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.site-top-bar'
            ),
            'declarations' => array(
                'color' => $color
            )
        ) );
    }
    
    $setting = 'topshop-nav-color';
    $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

    if ( $mod !== customizer_library_get_default( $setting ) ) {

        $color = sanitize_hex_color( $mod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.main-navigation'
            ),
            'declarations' => array(
                'background-color' => $color
            )
        ) );
    }
    $setting = 'topshop-nav-font-color';
    $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

    if ( $mod !== customizer_library_get_default( $setting ) ) {

        $color = sanitize_hex_color( $mod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.main-navigation a'
            ),
            'declarations' => array(
                'color' => $color
            )
        ) );
    }
    
    $setting = 'topshop-sidebar-head-color';
    $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

    if ( $mod !== customizer_library_get_default( $setting ) ) {

        $color = sanitize_hex_color( $mod );
        $rgba_color = customizer_library_hex_to_rgb( $color );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.widget-area .widget-title,
                .widget-area .widgettitle'
            ),
            'declarations' => array(
                'color' => $color
            )
        ) );
        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.widget-area .widget-title,
                .widget-area .widgettitle'
            ),
            'declarations' => array(
                'border-bottom' => '1px solid rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', 0.2);'
            )
        ) );
    }
    
    // Footer Colors
    $setting = 'topshop-footer-color';
    $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

    if ( $mod !== customizer_library_get_default( $setting ) ) {

        $color = sanitize_hex_color( $mod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.site-footer'
            ),
            'declarations' => array(
                'background-color' => $color
            )
        ) );
    }
    $setting = 'topshop-footer-font-color';
    $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

    if ( $mod !== customizer_library_get_default( $setting ) ) {

        $color = sanitize_hex_color( $mod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.site-footer,
                .site-footer-widgets .widget a'
            ),
            'declarations' => array(
                'color' => $color
            )
        ) );
    }
    $setting = 'topshop-footer-head-font-color';
    $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

    if ( $mod !== customizer_library_get_default( $setting ) ) {

        $color = sanitize_hex_color( $mod );
        $rgba_color = customizer_library_hex_to_rgb( $color );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.site-footer-widgets li .widgettitle,
                .site-footer-widgets li .widget-title'
            ),
            'declarations' => array(
                'color' => $color . ' !important'
            )
        ) );
        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.site-footer-widgets li .widgettitle,
                .site-footer-widgets li .widget-title'
            ),
            'declarations' => array(
                'border-bottom' => '1px solid rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', 0.2) !important;'
            )
        ) );
    }
    $setting = 'topshop-footer-bottombar-bg-color';
    $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

    if ( $mod !== customizer_library_get_default( $setting ) ) {

        $color = sanitize_hex_color( $mod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.site-footer-bottom-bar'
            ),
            'declarations' => array(
                'background-color' => $color
            )
        ) );
    }
    $setting = 'topshop-footer-bottombar-font-color';
    $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

    if ( $mod !== customizer_library_get_default( $setting ) ) {

        $color = sanitize_hex_color( $mod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.site-footer-bottom-bar'
            ),
            'declarations' => array(
                'color' => $color
            )
        ) );
    }

    // Remove WC Categories Count
    $setting = 'topshop-remove-cats-count';
    $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

    if ( $mod !== customizer_library_get_default( $setting ) ) {

        $logo_max_width = esc_attr( $mod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                'ul.products mark.count'
            ),
            'declarations' => array(
                'display' => 'none'
            )
        ) );
    }

}
endif;

add_action( 'customizer_library_styles', 'customizer_library_topshop_build_styles' );

if ( ! function_exists( 'customizer_library_topshop_styles' ) ) :
/**
 * Generates the style tag and CSS needed for the theme options.
 *
 * By using the "Customizer_Library_Styles" filter, different components can print CSS in the header.
 * It is organized this way to ensure there is only one "style" tag.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function customizer_library_topshop_styles() {

	do_action( 'customizer_library_styles' );

	// Echo the rules
	$css = Customizer_Library_Styles()->build();

	if ( ! empty( $css ) ) {
		echo "\n<!-- Begin Custom CSS -->\n<style type=\"text/css\" id=\"kaira-custom-css\">\n";
		echo $css;
		echo "\n</style>\n<!-- End Custom CSS -->\n";
	}
}
endif;

add_action( 'wp_head', 'customizer_library_topshop_styles', 11 );