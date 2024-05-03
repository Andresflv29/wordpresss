<?php
/**
 * Block styles.
 *
 * @package aploblocks
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */

function aploblocks_register_block_styles() {


	/******************************************************
	 * 
	 * Image Styles 
	 * 
	 ******************************************************/

	register_block_style('core/image',array('name'  => 'aplo-image-caption-top','label' => __( 'Caption Top', 'aploblocks' )));
	register_block_style('core/image',array('name'  => 'aplo-image-caption-bottom','label' => __( 'Caption Bottom', 'aploblocks' ), 'is_default' => true));
	
	/*********************************************************
	 * 
	 *  Gallery Styles
	 * 
	 *********************************************************/

	/******************************************************
	 * 
	 * Button Styles 
	 * 
	 ******************************************************/


	/******************************************************
	 * List Styles 
	 ******************************************************/
	
	/******************************************************
	 * Group Styles 
	 ******************************************************/
	/* these are for the sticky header */
	register_block_style('core/group',array('name'  => 'aplo-sticky-hide','label' => __( 'Hide Sticky Header', 'aploblocks' )));
	register_block_style('core/group',array('name'  => 'aplo-sticky-hide-in','label' => __( 'Hide Sticky Header In', 'aploblocks' )));


	/******************************************************
	 * Column Styles 
	 ******************************************************/
	register_block_style('core/column',array('name'  => 'aplo-column-sticky','label' => __( 'Sticky column', 'aploblocks' )));

	/******************************************************
	 * Cover Styles 
	 ******************************************************/
	register_block_style('core/cover',array('name'  => 'aplo-cover-hover','label' => __( 'Hover 1', 'aploblocks' )));
	register_block_style('core/cover',array('name'  => 'aplo-cover-hover-two','label' => __( 'Hover 2', 'aploblocks' )));
	
	/******************************************************
	 * Navigation Styles 
	 ******************************************************/
	 register_block_style('core/navigation',array('name'  => 'aplo-navigation-underline-anim','label' => __( 'Link Underline hover anim', 'aploblocks' )));

	/******************************************************
	 * Text Styles 
	 ******************************************************/
	
	/******************************************************
	 * Media & Text Styles 
	 ******************************************************/
	register_block_style('core/media-text',array('name'  => 'aplo-fixed-content-400','label' => __( 'Fixed Content 400', 'aploblocks' )));

	/*****************************************************
	* Featured Image
	******************************************************/

	/*****************************************************
	* Separator
	******************************************************/
	register_block_style('core/separator',array('name'  => 'aplo-separator','label' => __( 'Style 1', 'aploblocks' )));
	register_block_style('core/separator',array('name'  => 'aplo-separator-two','label' => __( 'Style 2', 'aploblocks' )));
	register_block_style('core/separator',array('name'  => 'aplo-separator-three','label' => __( 'Style 3', 'aploblocks' )));

	/*****************************************************
	* Quote
	******************************************************/

}
add_action( 'init', 'aploblocks_register_block_styles' );