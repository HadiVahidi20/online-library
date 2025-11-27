<?php
/**
 * Title: Banner
 * Slug: online-library/banner
 * Categories: online-library, banner
 */
?>
<!-- wp:group {"className":"banner-section","style":{"dimensions":{"minHeight":"620px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0px","bottom":"0px"}},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() . '/images/banner-bg.png'); ?>","id":7,"source":"file","title":"banner-bg"},"backgroundSize":"cover","backgroundPosition":"50% 100%"}},"backgroundColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group banner-section has-primary-background-color has-background" style="min-height:620px;margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"banner-content","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group banner-content"><!-- wp:group {"className":"banner-inner-content wow zoomIn","style":{"spacing":{"padding":{"right":"48%"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group banner-inner-content wow zoomIn" style="padding-right:48%"><!-- wp:heading {"className":"banner-title","style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} -->
<h2 class="wp-block-heading banner-title has-heading-color has-text-color has-link-color" style="font-size:40px;font-style:normal;font-weight:600;line-height:1.5"><?php echo esc_html__('Discover a World of Knowledge','online-library'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"18px","lineHeight":"1.8"},"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"textColor":"heading"} -->
<p class="has-heading-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);font-size:18px;line-height:1.8"><?php echo esc_html__('Explore books, journals, and digital resources to inspire your mind and fuel your curiosity.','online-library'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-btn","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-buttons banner-btn" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"primary","textColor":"text-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}},"typography":{"fontSize":"15px","textTransform":"capitalize"},"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","topRight":"20px","bottomRight":"20px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"8px","bottom":"8px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color-color has-primary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:0px;border-top-right-radius:20px;border-bottom-left-radius:0px;border-bottom-right-radius:20px;padding-top:8px;padding-right:25px;padding-bottom:8px;padding-left:25px;font-size:15px;text-transform:capitalize"><?php echo esc_html__('browse collection','online-library'); ?><i class="fa-solid fa-arrow-right"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->