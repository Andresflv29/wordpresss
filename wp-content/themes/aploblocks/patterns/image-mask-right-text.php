<?php
 /**
  * Title: Masked image right of text
  * Slug: aploblocks/image-mask-right-text
  * Categories: aploblocks/aploblocks
  */
?>
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"0","left":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"contrast"} -->
<div class="wp-block-columns is-not-stacked-on-mobile has-contrast-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"80px","bottom":"20px","left":"23px"}}},"textColor":"base","layout":{"type":"constrained"},"aploclip":5} -->
<div class="wp-block-group has-base-color has-text-color" style="padding-top:20px;padding-right:80px;padding-bottom:20px;padding-left:23px;--aplo-clip:5%"><!-- wp:heading {"textAlign":"center","aplofilters":{},"aplofiltersHover":{},"aplotransforms":{},"aplotransformsHover":{},"aplomargin":{},"aploimagemask":{}} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__('A heading','aploblocks') ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id fringilla tellus. Maecenas vel ultrices metus. Etiam ullamcorper luctus quam, nec porttitor lectus feugiat vel. Nulla ac consectetur ipsum, vel tempor ipsum.','aploblocks') ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"aplomarginleft":-65,"haspullstyles":1} -->
<div class="wp-block-column aplo-has-pull-styles" style="margin-left:-65px"><!-- wp:group {"style":{"spacing":{"padding":{"left":"8px","bottom":"0","top":"0","right":"0"},"blockGap":"0"}},"backgroundColor":"base","layout":{"type":"constrained"},"aplomask":"pl","aploclip":17} -->
<div class="wp-block-group has-base-background-color has-background is-style-aplo-mask-pl" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:8px;--aplo-clip:17%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/26.jpg","id":330,"dimRatio":0,"focalPoint":{"x":0.52,"y":0.32},"minHeight":359,"minHeightUnit":"px","aplomask":"pl","aploclip":17} -->
<div class="wp-block-cover is-style-aplo-mask-pl" style="min-height:359px;--aplo-clip:17%"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-330" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/26.jpg" style="object-position:52% 32%" data-object-fit="cover" data-object-position="52% 32%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->