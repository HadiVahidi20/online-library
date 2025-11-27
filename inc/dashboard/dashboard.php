<?php

add_action( 'admin_menu', 'online_library_gettingstarted' );
function online_library_gettingstarted() {
	add_theme_page( esc_html__('Begin Installation', 'online-library'), esc_html__('Begin Installation', 'online-library'), 'edit_theme_options', 'online-library-guide-page', 'online_library_guide');
}

if ( ! defined( 'ONLINE_LIBRARY_SUPPORT' ) ) {
define('ONLINE_LIBRARY_SUPPORT',__('https://wordpress.org/support/theme/online-library/','online-library'));
}
if ( ! defined( 'ONLINE_LIBRARY_REVIEW' ) ) {
define('ONLINE_LIBRARY_REVIEW',__('https://wordpress.org/support/theme/online-library/reviews/','online-library'));
}
if ( ! defined( 'ONLINE_LIBRARY_LIVE_DEMO' ) ) {
define('ONLINE_LIBRARY_LIVE_DEMO',__('https://trial.ovationthemes.com/online-library/','online-library'));
}
if ( ! defined( 'ONLINE_LIBRARY_BUY_PRO' ) ) {
define('ONLINE_LIBRARY_BUY_PRO',__('https://www.ovationthemes.com/products/library-wordpress-theme','online-library'));
}
if ( ! defined( 'ONLINE_LIBRARY_PRO_DOC' ) ) {
define('ONLINE_LIBRARY_PRO_DOC',__('https://trial.ovationthemes.com/docs/online-library-pro-doc/','online-library'));
}
if ( ! defined( 'ONLINE_LIBRARY_FREE_DOC' ) ) {
define('ONLINE_LIBRARY_FREE_DOC',__('https://trial.ovationthemes.com/docs/online-library-free-doc/','online-library'));
}
if ( ! defined( 'ONLINE_LIBRARY_THEME_NAME' ) ) {
define('ONLINE_LIBRARY_THEME_NAME',__('Premium Online Library Theme','online-library'));
}
if ( ! defined( 'ONLINE_LIBRARY_BUNDLE_LINK' ) ) {
define('ONLINE_LIBRARY_BUNDLE_LINK',__('https://www.ovationthemes.com/products/wordpress-bundle','online-library'));
}
/**
 * Theme Info Page
 */
function online_library_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="header-box-left">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'online-library'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="header-box-right">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( ONLINE_LIBRARY_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'online-library'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( ONLINE_LIBRARY_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'online-library'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( ONLINE_LIBRARY_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'online-library'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="box-container">
			<div class="box-left-main">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','online-library'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','online-library'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','online-library'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','online-library'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','online-library'); ?></h4>
					<p><?php esc_html_e('To check your website click here','online-library'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','online-library'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','online-library'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','online-library'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( ONLINE_LIBRARY_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','online-library'); ?></a>
				</div>
       	</div>
			<div class="box-right-main">
				<h3><?php echo esc_html(ONLINE_LIBRARY_THEME_NAME); ?></h3>
				<img class="online_library_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<div class="pro-links-inner">
						<a class="button-primary livedemo" href="<?php echo esc_url( ONLINE_LIBRARY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'online-library'); ?></a>
						<a class="button-primary buynow" href="<?php echo esc_url( ONLINE_LIBRARY_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'online-library'); ?></a>
						<a class="button-primary docs" href="<?php echo esc_url( ONLINE_LIBRARY_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'online-library'); ?></a>
					</div>
						<a class="button-primary bundle-btn" href="<?php echo esc_url( ONLINE_LIBRARY_BUNDLE_LINK ); ?>" target="_blank"><?php esc_html_e('WordPress Theme Bundle (125+ Themes at Just $99)', 'online-library'); ?></a>
				</div>
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
		</div>
	</div>

<?php }?>