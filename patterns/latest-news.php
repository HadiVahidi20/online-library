<?php
/**
 * Title: Latest News
 * Slug: online-library/latest-news
 * Categories: online-library, latest-news
 */
?>
<!-- wp:group {"className":"latest-news","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"0","bottom":"var:preset|spacing|50"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group latest-news has-primary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"head-box wow zoomIn","layout":{"type":"default"}} -->
<div class="wp-block-group head-box wow zoomIn"><!-- wp:heading {"textAlign":"center","level":3,"className":"latest-news-sec-title","style":{"typography":{"fontSize":"25px","textTransform":"capitalize"},"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}}},"textColor":"text-color"} -->
<h3 class="wp-block-heading has-text-align-center latest-news-sec-title has-text-color-color has-text-color has-link-color" style="margin-bottom:0;font-size:25px;text-transform:capitalize"><img class="wp-image-186" style="width: 62px;" src="<?php echo esc_url( get_template_directory_uri() . '/images/book-img.png'); ?>" alt=""><?php echo esc_html__('library resources','online-library'); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":10,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"wow zoomIn news-boxes owl-carousel","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"latest-news-box","style":{"border":{"radius":"12px","width":"2px"},"spacing":{"padding":{"top":"12px","bottom":"50px","left":"12px","right":"12px"}}},"backgroundColor":"base","borderColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group latest-news-box has-border-color has-secondary-border-color has-base-background-color has-background" style="border-width:2px;border-radius:12px;padding-top:12px;padding-right:12px;padding-bottom:50px;padding-left:12px"><!-- wp:post-featured-image {"height":"200px","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"0px","bottomRight":"0px"},"color":"#00000000","width":"1px"},"spacing":{"margin":{"bottom":"15px"}}}} /-->

<!-- wp:post-title {"isLink":true,"className":"news-title","style":{"typography":{"fontSize":"20px","textTransform":"capitalize"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->

<!-- wp:post-excerpt {"excerptLength":25,"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"300"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->

<!-- wp:read-more {"content":"Read More","className":"news-btn","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"},"padding":{"top":"6px","bottom":"6px","left":"25px","right":"25px"}},"border":{"radius":"25px","color":"#00000000","width":"2px"}},"textColor":"primary"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->