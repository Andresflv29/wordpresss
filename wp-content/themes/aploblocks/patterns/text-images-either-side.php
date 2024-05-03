<?php
 /**
  * Title: Text with images either side
  * Slug: aploblocks/text-images-either-side
  * Categories: aploblocks/aploblocks
  */
?>

<!-- wp:group {"layout":{"type":"constrained"},"aplofilters":{"dsx":5,"dsy":5,"dsb":5},"hasFilters":3} -->
<div class="wp-block-group aplo-has-filters" style="--aplo-filter-string:drop-shadow(5px 5px 5px rgba(var(--aplo-fdsc), var(--aplo-fdso)))"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"contrast"} -->
<div class="wp-block-columns has-contrast-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/22.jpg","id":221,"dimRatio":0,"isDark":false} -->
<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-221" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/22.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"contrast","textColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-center has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);flex-basis:40%"><!-- wp:heading {"textAlign":"center","level":3,"aplofilters":{},"aplofiltersHover":{},"aplotransforms":{},"aplotransformsHover":{},"aplomargin":{},"aploimagemask":{}} -->
<h3 class="wp-block-heading has-text-align-center"><?php echo esc_html__('A heading','aploblocks') ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nunc sed dui porttitor sollicitudin. Donec tristique facilisis ornare. ','aploblocks') ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__('Sed pulvinar placerat velit vel dapibus. Etiam placerat nec sem tincidunt tincidunt.','aploblocks') ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/21.jpg","id":519,"dimRatio":0,"isDark":false} -->
<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-519" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/21.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->