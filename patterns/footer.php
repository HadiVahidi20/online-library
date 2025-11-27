<?php
/**
 * Title: Footer
 * Slug: online-library/footer
 * Categories: online-library, footer
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|20","left":"0","right":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:group {"className":"footer-bg wow zoomIn","style":{"border":{"radius":"0px","width":"5px","color":"#FFFFF3"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"primary-light","layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group footer-bg wow zoomIn has-border-color has-primary-light-background-color has-background" style="border-color:#FFFFF3;border-width:5px;border-radius:0px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"className":"footer-widgets","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns footer-widgets"><!-- wp:column {"verticalAlignment":"top","width":"31%","className":"footer-box-3","style":{"elements":{"link":{"color":{"text":"#F5F6FA"}}},"color":{"text":"#F5F6FA"},"spacing":{"padding":{"right":"7rem"}}}} -->
<div class="wp-block-column is-vertically-aligned-top footer-box-3 has-text-color has-link-color" style="color:#F5F6FA;padding-right:7rem;flex-basis:31%"><!-- wp:site-logo /-->

<!-- wp:site-title {"style":{"typography":{"fontSize":"26px"},"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}}},"textColor":"text-color"} /-->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7","fontStyle":"normal","fontWeight":"300"},"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);font-style:normal;font-weight:300;line-height:1.7"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste.','online-library'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"footer-phone","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"left":"0px"}}},"textColor":"base"} -->
<p class="footer-phone has-base-color has-text-color has-link-color" style="padding-left:0px;font-size:16px;font-style:normal;font-weight:400"><a href="tel:1234567890"><i class="fa-solid fa-phone"></i><?php echo esc_html__('+1234567890','online-library'); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"footer-mail","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"left":"0px"}}},"textColor":"base"} -->
<p class="footer-mail has-base-color has-text-color has-link-color" style="padding-left:0px;font-size:16px;font-style:normal;font-weight:400"><a href="mailto:library@example.com"><i class="fa-solid fa-envelope"></i><?php echo esc_html__('library@example.com','online-library'); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"footer-address","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"left":"0px"}}},"textColor":"base"} -->
<p class="footer-address has-base-color has-text-color has-link-color" style="padding-left:0px;font-size:16px;font-style:normal;font-weight:400"><a href="#"><i class="fa-solid fa-location-dot"></i><?php echo esc_html__('123 Knowledge Lane, Springfield, USA','online-library'); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"23%","className":"footer-box-2","style":{"elements":{"link":{"color":{"text":"#F5F6FA"}}},"color":{"text":"#F5F6FA"},"spacing":{"padding":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-vertically-aligned-top footer-box-2 has-text-color has-link-color" style="color:#F5F6FA;padding-top:var(--wp--preset--spacing--50);flex-basis:23%"><!-- wp:heading {"style":{"typography":{"fontSize":"22px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--60);font-size:22px;text-transform:capitalize"><?php echo esc_html__('quick links','online-library'); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"300","textTransform":"capitalize"},"spacing":{"padding":{"left":"0px"}}},"textColor":"base"} -->
<ul style="padding-left:0px;font-size:16px;font-style:normal;font-weight:300;text-transform:capitalize" class="wp-block-list has-base-color has-text-color has-link-color"><!-- wp:list-item {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<li style="font-style:normal;font-weight:400"><a href="#"><?php echo esc_html__('home','online-library'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<li style="font-style:normal;font-weight:400"><a href="#"><?php echo esc_html__('About Us','online-library'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<li style="font-style:normal;font-weight:400"><a href="#"><?php echo esc_html__('Catalog / Collection','online-library'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<li style="font-style:normal;font-weight:400"><a href="#"><?php echo esc_html__('E-Resources','online-library'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<li style="font-style:normal;font-weight:400"><a href="#"><?php echo esc_html__('Events & Programs','online-library'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<li style="font-style:normal;font-weight:400"><a href="#"><?php echo esc_html__('Membership','online-library'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<li style="font-style:normal;font-weight:400"><a href="#"><?php echo esc_html__('Contact','online-library'); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"23%","className":"footer-box-2","style":{"elements":{"link":{"color":{"text":"#F5F6FA"}}},"color":{"text":"#F5F6FA"},"spacing":{"padding":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-vertically-aligned-top footer-box-2 has-text-color has-link-color" style="color:#F5F6FA;padding-top:var(--wp--preset--spacing--50);flex-basis:23%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"22px","textTransform":"capitalize"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--60);font-size:22px;text-transform:capitalize"><?php echo esc_html__('services','online-library'); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"300","textTransform":"capitalize"},"spacing":{"padding":{"left":"0px"}}}} -->
<ul style="padding-left:0px;font-size:16px;font-style:normal;font-weight:300;text-transform:capitalize" class="wp-block-list"><!-- wp:list-item {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<li style="font-style:normal;font-weight:400"><a href="#"><?php echo esc_html__('Book Lending','online-library'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<li style="font-style:normal;font-weight:400"><a href="#"><?php echo esc_html__('E-Book Access','online-library'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<li style="font-style:normal;font-weight:400"><a href="#"><?php echo esc_html__('Research Assistance','online-library'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<li style="font-style:normal;font-weight:400"><a href="#"><?php echo esc_html__('Reading Rooms','online-library'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<li style="font-style:normal;font-weight:400"><a href="#"><?php echo esc_html__('Printing & Photocopy','online-library'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<li style="font-style:normal;font-weight:400"><a href="#"><?php echo esc_html__('Community Events','online-library'); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"23%","className":"footer-box-2","style":{"elements":{"link":{"color":{"text":"#F5F6FA"}}},"color":{"text":"#F5F6FA"},"spacing":{"padding":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-vertically-aligned-top footer-box-2 has-text-color has-link-color" style="color:#F5F6FA;padding-top:var(--wp--preset--spacing--50);flex-basis:23%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"22px","textTransform":"capitalize"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--60);font-size:22px;text-transform:capitalize"><?php echo esc_html__('resources','online-library'); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"style":{"elements":{"link":{"color":{"text":"#F5F6FA"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"300","textTransform":"capitalize"},"color":{"text":"#F5F6FA"},"spacing":{"padding":{"left":"0rem"}}}} -->
<ul style="color:#F5F6FA;padding-left:0rem;font-size:16px;font-style:normal;font-weight:300;text-transform:capitalize" class="wp-block-list has-text-color has-link-color"><!-- wp:list-item {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<li style="font-style:normal;font-weight:400"><a href="#"><?php echo esc_html__('FAQ\'s','online-library'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<li style="font-style:normal;font-weight:400"><a href="#"><?php echo esc_html__('Research Guides','online-library'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<li style="font-style:normal;font-weight:400"><a href="#"><?php echo esc_html__('Library Policies','online-library'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<li style="font-style:normal;font-weight:400"><a href="#"><?php echo esc_html__('Membership Help','online-library'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<li style="font-style:normal;font-weight:400"><a href="#"><?php echo esc_html__('Recommendations','online-library'); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","left":"0","bottom":"var:preset|spacing|50","right":"0"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}}},"backgroundColor":"primary","textColor":"text-color","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group alignwide has-text-color-color has-primary-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:paragraph {"align":"center","className":"has-white-color has-text-color has-link-color","style":{"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"text-color"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color has-text-color-color" style="margin-top:0px;margin-bottom:0px;font-size:17px;font-style:normal;font-weight:400"><a rel="noreferrer noopener" href="https://www.ovationthemes.com/products/online-library" target="_blank"><?php echo esc_html__('Online Library Theme ','online-library'); ?></a><?php echo esc_html__('Proudly powered by ','online-library'); ?><a href="https://www.ovationthemes.com/" target="_blank"><?php echo esc_html__('Ovation Themes ','online-library'); ?></a><?php echo esc_html__(' and ','online-library'); ?><a href="https://wordpress.org" target="_blank"><?php echo esc_html__('WordPress','online-library'); ?></a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"scroll-top","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
<p class="scroll-top has-background-color has-text-color has-link-color"></p>
<!-- /wp:paragraph -->