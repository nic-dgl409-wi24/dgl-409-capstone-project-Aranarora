<?php
/**
 * Title: front-page
 * Slug: /front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:nextend/smartslider3 {"slider":"2"} -->
<div class="wp-block-nextend-smartslider3">[smartslider3 slider="2"]</div>
<!-- /wp:nextend/smartslider3 -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:media-text {"mediaId":46,"mediaLink":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/artboard-2-fotor-bg-remover-20240221133057","mediaType":"image"} -->
<div class="wp-block-media-text is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Artboard-2-fotor-bg-remover-20240221133057.png" alt="" class="wp-image-46 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"large"} -->
<h2 class="wp-block-heading has-secondary-color has-text-color has-link-color has-large-font-size">About Us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Our Vision</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>ValleyLife is your comprehensive guide, dedicated to assisting international students and newcomers in the Comox Valley, providing essential information, facilitating community involvement, and ensuring a smooth settlement experience.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-contrast-color has-text-color has-link-color wp-element-button">Continue Reading</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->