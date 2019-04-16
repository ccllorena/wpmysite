<?php
/**
 * Widget to display contact information.
 *
 * Author: GalussoThemes
 * Author URI: http://galussothemes.com
 */

function jgcciw_sanitize_textarea( $input ) {

	return wp_kses_post( force_balance_tags( $input ) );

}
 
 //Color picker
add_action( 'admin_enqueue_scripts', 'jgciw_color_picker' );
function jgciw_color_picker( $hook_suffix ) {
	
    wp_enqueue_style('wp-color-picker');
	wp_enqueue_script('wp-color-picker');

}

// Registrar widget
add_action ('widgets_init', 'jgcciw_register_contact_info_widget');
function jgcciw_register_contact_info_widget () {
	register_widget ('jgcciw_widget_contact_info');
}

// Widget
class jgcciw_widget_contact_info extends WP_Widget {
	
	function __construct(){
		
		$widget_ops = array (
			'classname'   => 'jgcciw_widget_contact_info',
			'free_text' => __('Widget to display contact information.', 'jgc-contact-info-widget'),
		);
		
		parent::__construct('jgcciw_widget_contact_info', __('(JGC) Contact Info Widget', 'jgc-contact-info-widget'), $widget_ops);
	}
	
	function form( $instance ) {
		
		$defaults = array (
			'title'      => '',
			'company'    => '',
			'address'    => '',
			'zip_code'   => '',
			'city'       => '',
			'province'   => '',
			'country'    => '',
			'email'      => '',
			'phone'      => '',
			'mobile'     => '',
			'fax'        => '',
			'social_1'   => '',
			'social_2'   => '',
			'social_3'   => '',
			'free_text'  => '',
			'free_text_location' => 'after_data',
			'text_color' => '',
			'social_icons_color' => 'same_text_color',
		);
		
		$instance = wp_parse_args ( (array) $instance, $defaults );
		
		$title      = $instance ['title'];
		$company    = $instance ['company'];
		$address    = $instance ['address'];
		$zip_code   = $instance ['zip_code'];
		$city       = $instance ['city'];
		$province   = $instance ['province'];
		$country    = $instance ['country'];
		$email      = $instance ['email'];
		$phone      = $instance ['phone'];
		$mobile     = $instance ['mobile'];
		$fax        = $instance ['fax'];
		$social_1   = $instance ['social_1'];
		$social_2   = $instance ['social_2'];
		$social_3   = $instance ['social_3'];
		$free_text  = $instance ['free_text'];
		$text_color = $instance ['text_color'];
		$free_text_location = $instance ['free_text_location'];
		$social_icons_color = $instance ['social_icons_color'];
    	?>
		
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title', 'jgc-contact-info-widget' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id( 'company' ); ?>"><?php _e( 'Company', 'jgc-contact-info-widget' ); ?></label>
		<input type="text" class="widefat color_change" id="<?php echo $this->get_field_id( 'company' ); ?>" name="<?php echo $this->get_field_name( 'company' ); ?>" value="<?php echo esc_attr( $company ); ?>">
		</p>

		<p><?php _e('Address', 'jgc-contact-info-widget'); ?> &nbsp; 
        	<textarea class="widefat"  id="<?php echo $this->get_field_id( 'address' ); ?>"
			name="<?php echo $this->get_field_name('address'); ?>" 
			rows="5"><?php echo esc_attr($address); ?></textarea><br />
		
		<p>

		<p>
		<label for="<?php echo $this->get_field_id( 'zip_code' ); ?>"><?php _e( 'Zip Code', 'jgc-contact-info-widget' ); ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'zip_code' ); ?>" name="<?php echo $this->get_field_name( 'zip_code' ); ?>" value="<?php echo esc_attr( $zip_code ); ?>">
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id( 'city' ); ?>"><?php _e( 'City', 'jgc-contact-info-widget' ); ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'city' ); ?>" name="<?php echo $this->get_field_name( 'city' ); ?>" value="<?php echo esc_attr( $city ); ?>">
		</p>

		<p>
		<label for="<?php echo $this->get_field_id( 'province' ); ?>"><?php _e( 'Province', 'jgc-contact-info-widget' ); ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'province' ); ?>" name="<?php echo $this->get_field_name( 'province' ); ?>" value="<?php echo esc_attr( $province ); ?>">
		</p>

		<p>
		<label for="<?php echo $this->get_field_id( 'country' ); ?>"><?php _e( 'Country', 'jgc-contact-info-widget' ); ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'country' ); ?>" name="<?php echo $this->get_field_name( 'country' ); ?>" value="<?php echo esc_attr( $country ); ?>">
		</p>

		<p>
		<label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e( 'E-mail', 'jgc-contact-info-widget' ); ?></label>
		<input type="email" class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" value="<?php echo esc_attr( $email ); ?>">
		</p>

		<p>
		<label for="<?php echo $this->get_field_id( 'phone' ); ?>"><?php _e( 'Phone(s)', 'jgc-contact-info-widget' ); ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" value="<?php echo esc_attr( $phone ); ?>">
		</p>

		<p>
		<label for="<?php echo $this->get_field_id( 'mobile' ); ?>"><?php _e( 'Mobile(s)', 'jgc-contact-info-widget' ); ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'mobile' ); ?>" name="<?php echo $this->get_field_name( 'mobile' ); ?>" value="<?php echo esc_attr( $mobile ); ?>">
		</p>

		<p>
		<label for="<?php echo $this->get_field_id( 'fax' ); ?>"><?php _e( 'Fax', 'jgc-contact-info-widget' ); ?></label>
		<input type="tel" class="widefat" id="<?php echo $this->get_field_id( 'fax' ); ?>" name="<?php echo $this->get_field_name( 'fax' ); ?>" value="<?php echo esc_attr( $fax ); ?>">
		</p>

		<p>
		<label for="<?php echo $this->get_field_id( 'social_1' ); ?>"><?php _e( 'Social URL 1', 'jgc-contact-info-widget' ); ?></label>
		<input type="tel" class="widefat" id="<?php echo $this->get_field_id( 'social_1' ); ?>" name="<?php echo $this->get_field_name( 'social_1' ); ?>" value="<?php echo esc_attr( $social_1 ); ?>">
		</p>

		<p>
		<label for="<?php echo $this->get_field_id( 'social_2' ); ?>"><?php _e( 'Social URL 2', 'jgc-contact-info-widget' ); ?></label>
		<input type="tel" class="widefat" id="<?php echo $this->get_field_id( 'social_2' ); ?>" name="<?php echo $this->get_field_name( 'social_2' ); ?>" value="<?php echo esc_attr( $social_2 ); ?>">
		</p>

		<p>
		<label for="<?php echo $this->get_field_id( 'social_3' ); ?>"><?php _e( 'Social URL 3', 'jgc-contact-info-widget' ); ?></label>
		<input type="tel" class="widefat" id="<?php echo $this->get_field_id( 'social_3' ); ?>" name="<?php echo $this->get_field_name( 'social_3' ); ?>" value="<?php echo esc_attr( $social_3 ); ?>">
		</p>

		<p><?php _e('Text', 'jgc-contact-info-widget'); ?> &nbsp; 
        	<textarea class="widefat"  id="<?php echo $this->get_field_id( 'free_text' ); ?>"
			name="<?php echo $this->get_field_name('free_text'); ?>" 
			rows="5"><?php echo esc_attr($free_text); ?></textarea><br />
		
		
		<label for="<?php echo $this->get_field_id('free_text_location'); ?>"><?php _e('Text location','jgc-contact-info-widget'); ?>:</label> 
		<select id="<?php echo $this->get_field_id('free_text_location'); ?>" name="<?php echo $this->get_field_name('free_text_location'); ?>" class="widefat">
			<option value="after_data" <?php echo selected( $free_text_location, 'after_data', false ); ?>><?php _e('After data', 'jgc-contact-info-widget'); ?></option>
			<option value="before_data" <?php echo selected( $free_text_location, 'before_data', false ); ?>><?php _e('Before data', 'jgc-contact-info-widget'); ?></option>
		</select>
		</p>

		<label for="<?php echo $this->get_field_id( 'text_color' ); ?>"><?php _e( 'Text Color', 'jgc-contact-info-widget' ); ?></label><br />
		<input type="text" class="jgcciw_text_color_picker widefat" id="<?php echo $this->get_field_id( 'text_color' ); ?>" name="<?php echo $this->get_field_name( 'text_color' ); ?>"
		data-default-color=""
		value="<?php echo esc_attr($text_color); ?>" />
	
		<br><span class="description"><?php _e( '(Do not select color to keep the colors of your current theme)', 'jgc-contact-info-widget'); ?></span>

		<p>

		<label for="<?php echo $this->get_field_id('social_icons_color'); ?>"><?php _e('Social Icons color','jgc-contact-info-widget'); ?>:</label> 
		<select id="<?php echo $this->get_field_id('social_icons_color'); ?>" name="<?php echo $this->get_field_name('social_icons_color'); ?>" class="widefat">
			<option value="same_text_color" <?php echo selected( $social_icons_color, 'same_text_color', false ); ?>><?php _e('Same that text', 'jgc-contact-info-widget'); ?></option>
			<option value="original_color" <?php echo selected( $social_icons_color, 'original_color', false ); ?>><?php _e('Original color', 'jgc-contact-info-widget'); ?></option>
		</select>
		</p>
		
		<p><a style="font-style: italic; color:#72777c; text-decoration: none;" href="http://galussothemes.com/wordpress-themes" target="_blank"><?php _e('Take a look to our Themes', 'jgc-contact-info-widget'); ?> &raquo;</a></p><hr>

		<script type="text/javascript">
		jQuery(document).ready(function() {
			
			jQuery('input.jgcciw_text_color_picker').wpColorPicker({ 
        		change: function(){
            		jQuery('.color_change').trigger('change'); // Utilizamos el campo company para que el personalizador se actualice.
        		} 
    		});
			 
		});
		</script>
		
	<?php    
	}
  
    function update( $new_instance, $old_instance ) {
		
        $instance = $old_instance;
		
        $instance['title']      = (!empty( $new_instance['title'])) ? sanitize_text_field( $new_instance['title']) : '';
        $instance['company']    = (!empty( $new_instance['company'])) ? sanitize_text_field( $new_instance['company']) : '';
        $instance['address']    = (!empty($new_instance['address'])) ? jgcciw_sanitize_textarea($new_instance['address']) : '';
        $instance['zip_code']   = (!empty( $new_instance['zip_code'])) ? sanitize_text_field( $new_instance['zip_code']) : '';
        $instance['city']       = (!empty( $new_instance['city'])) ? sanitize_text_field( $new_instance['city']) : '';
		$instance['province']   = (!empty( $new_instance['province'])) ? sanitize_text_field( $new_instance['province']) : '';
		$instance['country']    = (!empty( $new_instance['country'])) ? sanitize_text_field( $new_instance['country']) : '';
		$instance['email']      = (!empty( $new_instance['email'])) ? sanitize_text_field( $new_instance['email']) : '';
		$instance['phone']      = (!empty( $new_instance['phone'])) ? sanitize_text_field( $new_instance['phone']) : '';
		$instance['mobile']     = (!empty( $new_instance['mobile'])) ? sanitize_text_field( $new_instance['mobile']) : '';
		$instance['fax']        = (!empty( $new_instance['fax'])) ? sanitize_text_field( $new_instance['fax']) : '';
		$instance['social_1']   = (!empty( $new_instance['social_1'])) ? esc_url( $new_instance['social_1']) : '';
		$instance['social_2']   = (!empty( $new_instance['social_2'])) ? esc_url( $new_instance['social_2']) : '';
		$instance['social_3']   = (!empty( $new_instance['social_3'])) ? esc_url( $new_instance['social_3']) : '';
		$instance['free_text']  = (!empty( $new_instance['free_text'])) ? jgcciw_sanitize_textarea($new_instance['free_text']) : '';
        $instance['text_color'] = (!empty( $new_instance['text_color'])) ? sanitize_text_field( $new_instance['text_color']) : '';
        $instance['social_icons_color'] = strip_tags( $new_instance['social_icons_color'] );
        $instance['free_text_location'] = strip_tags( $new_instance['free_text_location'] );
		
        return $instance;
	}
	
    function widget( $args, $instance ) {
		
		extract($args);
			
	    echo $before_widget;
		
		$title      = !empty($instance['title']) ? apply_filters ('widget_title', $instance['title']) : '';
	    $company    = !empty($instance['company']) ? $instance['company'] : '';
        $address    = !empty($instance['address']) ? $instance['address'] : '';
        $zip_code   = !empty($instance['zip_code']) ? $instance['zip_code'] : '';
        $city       = !empty($instance['city']) ? $instance['city'] : '';
        $province   = !empty($instance['province']) ? $instance['province'] : '';
        $country    = !empty($instance['country']) ? $instance['country'] : '';
        $email      = !empty($instance['email']) ? $instance['email'] : '';
        $phone      = !empty($instance['phone']) ? $instance['phone'] : '';
        $mobile     = !empty($instance['mobile']) ? $instance['mobile'] : '';
        $fax        = !empty($instance['fax']) ? $instance['fax'] : '';
        $social_1   = !empty($instance['social_1']) ? $instance['social_1'] : '';
		$social_2   = !empty($instance['social_2']) ? $instance['social_2'] : '';
        $social_3   = !empty($instance['social_3']) ? $instance['social_3'] : '';
        $free_text  = !empty($instance['free_text']) ? $instance['free_text'] : '';
        $text_color = !empty($instance['text_color']) ? $instance['text_color'] : '';
        $social_icons_color = !empty($instance['social_icons_color']) ? $instance['social_icons_color'] : 'same_text_color';
        $free_text_location = !empty($instance['free_text_location']) ? $instance['free_text_location'] : 'after_data';

        if ( $social_icons_color == 'same_text_color' ){
        	$social_icons_class = 'class="jgc-social-icon-no-color"';
        }else{
        	$social_icons_class = 'class="jgc-social-icon-color"';
        }
		
		if (!empty($title)) { 
			echo $before_title . esc_html ($title) . $after_title;
		}
        ?>

        <style type="text/css">
        	.jgcciw-data-wrapper a {color:<?php echo $text_color; ?> !important;}
        </style>

        <div class="jgcciw-data-wrapper textwidget" style="color:<?php echo $text_color; ?>;">
        <?php
        	if ( !empty($free_text) && $free_text_location == 'before_data' ) { echo '<div class="jgcciw-free-text-wrapper">' . $free_text . '</div>';}
	    	if ( !empty($company) ) { echo '<strong><i class="fa fa-building"></i> ' . $company . '</strong><br>';}
			if ( !empty($address) ) { echo '<i class="fa fa-map-marker"></i> ' . $address . '<br>';}
			if ( !empty($city) ) { echo $zip_code . ' ' . $city . ' ' . $province . ' ' . $country . '<br>';}
			if ( !empty($email) ) { echo '<i class="fa fa-envelope"></i> <a href="mailto:' . $email . '">' . $email . '</a><br>';}
			if ( !empty($phone) ) {echo '<i class="fa fa-phone"></i> ' . $phone . '<br>';}
			if ( !empty($mobile) ) { echo '<i class="fa fa-tablet"></i> ' . $mobile . '<br>';}
			if ( !empty($fax) ) { echo '<i class="fa fa-fax" title="Fax"></i> ' . $fax . '<br>';}
			echo '<div ' . $social_icons_class . '>'; 
			if ( !empty($social_1) ) { echo '<a class="jgc-social-icon-fa-square" href="' . $social_1 . '"></a>&nbsp;&nbsp;';}
			if ( !empty($social_2) ) { echo '<a class="jgc-social-icon-fa-square" href="' . $social_2 . '"></a>&nbsp;&nbsp;';}
			if ( !empty($social_3) ) { echo '<a class="jgc-social-icon-fa-square" href="' . $social_3 . '"></a>';}
			echo '</div>';
			if ( !empty($free_text) && $free_text_location == 'after_data' ) { echo '<div class="jgcciw-free-text-wrapper">' . $free_text . '</div>';}
	    ?>
		</div>
		
        <?php
		
		echo $after_widget;
	}
    
} 