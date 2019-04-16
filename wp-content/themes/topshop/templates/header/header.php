<?php if ( get_theme_mod( 'topshop-header-layout' ) == 'topshop-header-layout-three' ) : ?>
	
	<?php get_template_part( '/templates/header/header-layout-three' ); ?>
	
<?php elseif ( get_theme_mod( 'topshop-header-layout' ) == 'topshop-header-layout-centered' ) : ?>

    <?php get_template_part( '/templates/header/header-layout-centered' ); ?>
    
<?php else : ?>
    
    <?php get_template_part( '/templates/header/header-layout-standard' ); ?>
    
<?php endif; ?>