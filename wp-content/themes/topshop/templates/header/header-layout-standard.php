<?php global $woocommerce; ?>

<?php if( get_theme_mod( 'topshop-show-header-top-bar', customizer_library_get_default( 'topshop-show-header-top-bar' ) ) ) : ?>
    
    <div class="site-top-bar border-bottom">
        <div class="site-container">
            
            <div class="site-top-bar-left">
                
                <?php do_action ( 'topshop_inside_top_bar_left_left' ); ?>
                
                <?php wp_nav_menu( array( 'theme_location' => 'top-bar', 'fallback_cb' => false, 'depth'  => 1 ) ); ?>
                
                <?php do_action ( 'topshop_inside_top_bar_left_right' ); ?>
                
            </div>
            <div class="site-top-bar-right">
                
                <?php do_action ( 'topshop_inside_top_bar_right_left' ); ?>
                
                <?php
                if ( topshop_is_woocommerce_activated() ) { ?>
                    <div class="site-top-bar-left-text"><?php echo wp_kses_post( get_theme_mod( 'topshop-header-info-text', 'Call Us: 082 444 BOOM' ) ) ?></div>
                <?php
                } ?>
                <?php get_template_part( '/templates/social-links' ); ?>
                
                <?php do_action ( 'topshop_inside_top_bar_right_right' ); ?>
                
            </div>
            <div class="clearboth"></div>
            
            <?php if ( get_theme_mod( 'topshop-header-search' ) ) : ?>
                <div class="search-block">
                    <?php if ( get_theme_mod( 'topshop-search-shortcode' ) ) : ?>
                        <?php echo do_shortcode( sanitize_text_field( get_theme_mod( 'topshop-search-shortcode' ) ) ); ?>
                    <?php else : ?>
                        <?php get_search_form(); ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            
        </div>
        
    </div>

<?php endif; ?>

<div class="site-container">
    
    <div class="site-header-left">
        
        <?php
        $site_title_tag = get_theme_mod( 'topshop-seo-site-title-tag', customizer_library_get_default( 'topshop-seo-site-title-tag' ) );
        $site_desc_tag = get_theme_mod( 'topshop-seo-site-desc-tag', customizer_library_get_default( 'topshop-seo-site-desc-tag' ) );
        if ( get_header_image() ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo-img" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img src="<?php esc_url( header_image() ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ) ?>" /></a>
        <?php else : ?>
            <h<?php echo esc_attr( $site_title_tag ); ?> class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h<?php echo esc_attr( $site_title_tag ); ?>>
            <h<?php echo esc_attr( $site_desc_tag ); ?> class="site-description"><?php bloginfo( 'description' ); ?></h<?php echo esc_attr( $site_desc_tag ); ?>>
        <?php endif; ?>
        
    </div><!-- .site-branding -->
    
    <div class="site-header-right">
        
        <?php if ( topshop_is_woocommerce_activated() ) : ?>
            <?php if ( !get_theme_mod( 'topshop-header-remove-acc' ) ) : ?>
                <?php if ( is_user_logged_in() ) { ?>
                    <div class="site-header-right-link"><a href="<?php echo get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ); ?>" title="<?php _e( 'My Account','topshop' ); ?>"><?php _e( 'My Account','topshop' ); ?></a></div>
                <?php } else { ?>
                    <div class="site-header-right-link"><a href="<?php echo get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ); ?>" title="<?php _e( 'Login','topshop' ); ?>"><?php _e( 'Sign In / Register','topshop' ); ?></a></div>
                <?php } ?>
            <?php endif; ?>
            <?php if ( !get_theme_mod( 'topshop-header-remove-cart' ) ) : ?>
                <div class="header-cart">
                    <a class="header-cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'topshop' ); ?>">
                        <span class="header-cart-amount">
                            <?php echo sprintf( _n( '(%d)', '(%d)', WC()->cart->get_cart_contents_count(), 'topshop' ), WC()->cart->get_cart_contents_count() ); ?><span> - <?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span>
                        </span>
                        <span class="header-cart-checkout <?php echo ( WC()->cart->get_cart_contents_count() > 0 ) ? sanitize_html_class( 'cart-has-items' ) : ''; ?>">
                            <i class="fa <?php echo ( get_theme_mod( 'topshop-cart-icon' ) ) ? sanitize_html_class( get_theme_mod( 'topshop-cart-icon' ) ) : sanitize_html_class( 'fa-shopping-cart' ); ?>"></i>
                        </span>
                    </a>
                    
                    <?php if ( get_theme_mod( 'topshop-header-add-drop-cart' ) ) : ?>
                        <div class="site-header-cart">
                            <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php else : ?>
            
            <div class="site-top-bar-left-text"><?php echo wp_kses_post( get_theme_mod( 'topshop-header-info-text', 'Call Us: 082 444 BOOM' ) ) ?></div>
            
        <?php endif; ?>
        
    </div>
    <div class="clearboth"></div>
    
</div>

<nav id="site-navigation" class="main-navigation <?php echo ( get_theme_mod( 'topshop-sticky-header' ) ) ? sanitize_html_class( 'header-stick' ) : ''; ?>" role="navigation">
    <span class="header-menu-button"><i class="fa fa-bars"></i><span><?php _e( 'Menu', 'topshop' ); ?></span></span>
    <div id="main-menu" class="main-menu-container">
        <span class="main-menu-close"><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></span>
        <div class="site-container">
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            <div class="clearboth"></div>
        </div>
    </div>
</nav><!-- #site-navigation -->