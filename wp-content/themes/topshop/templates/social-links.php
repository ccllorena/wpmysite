<?php
if( get_theme_mod( 'topshop-social-email' ) ) :
    echo '<a href="' . esc_url( 'mailto:' . antispambot( get_theme_mod( 'topshop-social-email' ), 1 ) ) . '" title="' . __( 'Envianos un email', 'topshop' ) . '" class="social-icon social-email"><i class="fa fa-envelope-o"></i></a>';
endif;

if( get_theme_mod( 'topshop-social-skype' ) ) :
    echo '<a href="skype:' . esc_html( get_theme_mod( 'topshop-social-skype' ) ) . '?userinfo" title="' . __( 'Contact Us on Skype', 'topshop' ) . '" class="social-icon social-skype"><i class="fa fa-skype"></i></a>';
endif;

if( get_theme_mod( 'topshop-social-facebook' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'topshop-social-facebook' ) ) . '" target="_blank" title="' . __( 'Find Us on Facebook', 'topshop' ) . '" class="social-icon social-facebook"><i class="fa fa-facebook"></i></a>';
endif;

if( get_theme_mod( 'topshop-social-twitter' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'topshop-social-twitter' ) ) . '" target="_blank" title="' . __( 'Follow Us on Twitter', 'topshop' ) . '" class="social-icon social-twitter"><i class="fa fa-twitter"></i></a>';
endif;

if( get_theme_mod( 'topshop-social-google-plus' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'topshop-social-google-plus' ) ) . '" target="_blank" title="' . __( 'Find Us on Google Plus', 'topshop' ) . '" class="social-icon social-gplus"><i class="fa fa-google-plus"></i></a>';
endif;

if( get_theme_mod( 'topshop-social-linkedin' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'topshop-social-linkedin' ) ) . '" target="_blank" title="' . __( 'Find Us on LinkedIn', 'topshop' ) . '" class="social-icon social-linkedin"><i class="fa fa-linkedin"></i></a>';
endif;

if( get_theme_mod( 'topshop-social-behance' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'topshop-social-behance' ) ) . '" target="_blank" title="' . __( 'Find Us on Behance', 'topshop' ) . '" class="social-icon social-behance"><i class="fa fa-behance"></i></a>';
endif;

if( get_theme_mod( 'topshop-social-houzz' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'topshop-social-houzz' ) ) . '" target="_blank" title="' . __( 'Find Us on Houzz', 'topshop' ) . '" class="social-icon social-houzz"><i class="fa fa-houzz"></i></a>';
endif;

if( get_theme_mod( 'topshop-social-vk' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'topshop-social-vk' ) ) . '" target="_blank" title="' . __( 'Find Us on Vkontakte', 'topshop' ) . '" class="social-icon social-linkedin"><i class="fa fa-vk"></i></a>';
endif;

if( get_theme_mod( 'topshop-social-tumblr' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'topshop-social-tumblr' ) ) . '" target="_blank" title="' . __( 'Find Us on Tumblr', 'topshop' ) . '" class="social-icon social-tumblr"><i class="fa fa-tumblr"></i></a>';
endif;

if( get_theme_mod( 'topshop-social-flickr' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'topshop-social-flickr' ) ) . '" target="_blank" title="' . __( 'Find Us on Flickr', 'topshop' ) . '" class="social-icon social-flickr"><i class="fa fa-flickr"></i></a>';
endif;

if( get_theme_mod( 'topshop-social-tripadvisor' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'topshop-social-tripadvisor' ) ) . '" target="_blank" title="' . __( 'Find Us on TripAdvisor', 'topshop' ) . '" class="social-icon social-tripadvisor"><i class="fa fa-tripadvisor"></i></a>';
endif;

if( get_theme_mod( 'topshop-social-custom-class' ) && get_theme_mod( 'topshop-social-custom-url' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'topshop-social-custom-url' ) ) . '" target="_blank" class="social-icon social-custom"><i class="fa ' . sanitize_html_class( get_theme_mod( 'topshop-social-custom-class' ) ) . '"></i></a>';
endif;

if( get_theme_mod( 'topshop-header-search' ) ) :
    echo '<i class="fa fa-search search-btn"></i>';
endif; ?>
