<?php
/**
 * Online Library: Customizer
 *
 * @subpackage Online Library
 * @since 1.0
 */

function online_library_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	// Pro Section
 	$wp_customize->add_section('online_library_pro', array(
        'title'    => __('ONLINE LIBRARY PREMIUM', 'online-library'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('online_library_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Online_Library_Pro_Control($wp_customize, 'online_library_pro', array(
        'label'    => __('ONLINE LIBRARY PREMIUM', 'online-library'),
        'section'  => 'online_library_pro',
        'settings' => 'online_library_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'online_library_customize_register' );


define('ONLINE_LIBRARY_PRO_LINK',__('https://www.ovationthemes.com/products/library-wordpress-theme','online-library'));

define('ONLINE_LIBRARY_BUNDLE_BTN',__('https://www.ovationthemes.com/products/wordpress-bundle','online-library'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Online_Library_Pro_Control')):
    class Online_Library_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( ONLINE_LIBRARY_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE ONLINE LIBRARY PREMIUM','online-library');?> </a>
	        </div>
            <div class="col-md">
                <img class="online_library_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
                <ul style="padding-top:10px">
                    <li class="upsell-online_library"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'online-library');?> </li>                 
                    <li class="upsell-online_library"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'online-library');?> </li>
                    <li class="upsell-online_library"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'online-library');?> </li>
                    <li class="upsell-online_library"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'online-library');?> </li>
                    <li class="upsell-online_library"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'online-library');?> </li>
                    <li class="upsell-online_library"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'online-library');?> </li>
                    <li class="upsell-online_library"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'online-library');?> </li>
                    <li class="upsell-online_library"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'online-library');?> </li>
                    <li class="upsell-online_library"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'online-library');?> </li>
                    <li class="upsell-online_library"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'online-library');?> </li>
                    <li class="upsell-online_library"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'online-library');?> </li>
                    <li class="upsell-online_library"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'online-library');?> </li>
                    <li class="upsell-online_library"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'online-library');?> </li>
                    <li class="upsell-online_library"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'online-library');?> </li>
                </ul>
        	</div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( ONLINE_LIBRARY_BUNDLE_BTN ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('WP Theme Bundle (125+ Themes)','online-library');?> </a>
            </div>
        </label>
    <?php } }
endif;