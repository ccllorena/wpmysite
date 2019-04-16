/**
 * TopShop Customizer Custom Functionality
 *
 */
( function( $ ) {
    
    $( window ).load( function() {

        // Show / Hide Fonts Google/Websafe settings
        guten_websafe_check();
        $( '#customize-control-topshop-disable-google-fonts input[type=checkbox]' ).on( 'change', function() {
            guten_websafe_check();
        });
        
        function guten_websafe_check() {
            if ( $( '#customize-control-topshop-disable-google-fonts input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-topshop-styling #customize-control-topshop-body-font' ).hide();
                $( '#sub-accordion-section-topshop-styling #customize-control-topshop-heading-font' ).hide();
                $( '#sub-accordion-section-topshop-styling #customize-control-topshop-body-font-websafe' ).show();
                $( '#sub-accordion-section-topshop-styling #customize-control-topshop-heading-font-websafe' ).show();
            } else {
                $( '#sub-accordion-section-topshop-styling #customize-control-topshop-body-font' ).show();
                $( '#sub-accordion-section-topshop-styling #customize-control-topshop-heading-font' ).show();
                $( '#sub-accordion-section-topshop-styling #customize-control-topshop-body-font-websafe' ).hide();
                $( '#sub-accordion-section-topshop-styling #customize-control-topshop-heading-font-websafe' ).hide();
            }
        }
        
        var the_select_value = $( '#customize-control-topshop-slider-type select' ).val();
        topshop_customizer_slider_check( the_select_value );
        
        $( '#customize-control-topshop-slider-type select' ).on( 'change', function() {
            var select_value = $( this ).val();
            topshop_customizer_slider_check( select_value );
        } );
        
        function topshop_customizer_slider_check( select_value ) {
            if ( select_value == 'topshop-slider-default' ) {
                $( '#customize-control-topshop-meta-slider-shortcode' ).hide();
                $( '#customize-control-topshop-slider-cats' ).show();
                $( '#customize-control-topshop-upsell-two-one' ).show();
                $( '#customize-control-topshop-upsell-slider' ).show();
            } else if ( select_value == 'topshop-meta-slider' ) {
                $( '#customize-control-topshop-slider-cats' ).hide();
                $( '#customize-control-topshop-upsell-two-one' ).hide();
                $( '#customize-control-topshop-meta-slider-shortcode' ).show();
                $( '#customize-control-topshop-upsell-slider' ).hide();
            } else {
                $( '#customize-control-topshop-slider-cats' ).hide();
                $( '#customize-control-topshop-upsell-two-one' ).hide();
                $( '#customize-control-topshop-meta-slider-shortcode' ).hide();
                $( '#customize-control-topshop-upsell-slider' ).hide();
            }
        }
        
        // Show / Hide Blog Summary Settings
        var topshop_blg_value = $( '#customize-control-topshop-article-content-display select' ).val();
        topshop_blg_type_check( topshop_blg_value );
        
        $( '#customize-control-topshop-article-content-display select' ).on( 'change', function() {
            var topshop_blg_select_value = $( this ).val();
            topshop_blg_type_check( topshop_blg_select_value );
        });
        
        function topshop_blg_type_check( topshop_blg_select_value ) {
            if ( topshop_blg_select_value == 'blog-display-summary' ) {
                $( '#sub-accordion-section-topshop-panel-layout-section-blog #customize-control-topshop-article-content-word-count' ).show();
                $( '#sub-accordion-section-topshop-panel-layout-section-blog #customize-control-topshop-article-content-readmore' ).show();
            } else {
                $( '#sub-accordion-section-topshop-panel-layout-section-blog #customize-control-topshop-article-content-word-count' ).hide();
                $( '#sub-accordion-section-topshop-panel-layout-section-blog #customize-control-topshop-article-content-readmore' ).hide();
            }
        }
        
    } );
    
} )( jQuery );