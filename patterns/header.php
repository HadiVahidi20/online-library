<?php
/**
 * Title: Header
 * Slug: online-library/header
 * Categories: online-library, header
 */
?>
<!-- wp:group {"className":"main-header","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group main-header" style="margin-top:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"header-top wow fadeInDown","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group header-top wow fadeInDown has-primary-background-color has-background" style="padding-top:10px;padding-bottom:10px"><!-- wp:columns {"verticalAlignment":"center","className":"header-info-boxes"} -->
<div class="wp-block-columns are-vertically-aligned-center header-info-boxes"><!-- wp:column {"verticalAlignment":"center","width":"15%","className":"header-phone-box"} -->
<div class="wp-block-column is-vertically-aligned-center header-phone-box" style="flex-basis:15%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px"}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color" style="font-size:14px"><a href="tel:1234567890"><i class="fa-solid fa-phone"></i><?php echo esc_html__('+1234567890','online-library'); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-mail-box"} -->
<div class="wp-block-column is-vertically-aligned-center header-mail-box" style="flex-basis:20%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px"}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color" style="font-size:14px"><a href="mailto:library@example.com"><i class="fa-regular fa-envelope"></i><?php echo esc_html__('library@example.com','online-library'); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"65%","className":"header-text-box"} -->
<div class="wp-block-column is-vertically-aligned-center header-text-box" style="flex-basis:65%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px"}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color" style="font-size:14px"><i class="fa-solid fa-bullhorn"></i><?php echo esc_html__('New Arrivals: Explore the latest books & journals now available in our collection!','online-library'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"header-bottom","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group header-bottom" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"header-box","style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"0px","right":"0px"}},"border":{"radius":{"bottomRight":"60px"}}},"backgroundColor":"secondary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group header-box has-secondary-background-color has-background" style="border-bottom-right-radius:60px;padding-top:25px;padding-right:0px;padding-bottom:25px;padding-left:0px"><!-- wp:site-title {"className":"header-logo","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"22px"}},"textColor":"primary"} /-->

<!-- wp:navigation {"textColor":"heading","overlayBackgroundColor":"white","overlayTextColor":"black","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"header-menu","style":{"typography":{"fontSize":"16px","letterSpacing":"1px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|60"}},"fontFamily":"inter","layout":{"type":"flex","justifyContent":"center"}} --><!-- wp:navigation-link {"label":"<?php esc_html_e('Home','online-library'); ?>","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e('About Us','online-library'); ?>","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e('Catalog','online-library'); ?>","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e('Membership','online-library'); ?>","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e('Buy Now','online-library'); ?>","type":"link","opensInNewTab":true,"url":"https://www.ovationthemes.com/products/library-wordpress-theme","kind":"custom","className":"buynow"} /-->

<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->