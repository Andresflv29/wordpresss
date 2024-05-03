<?php

/*******************************************************
 * 
 *  Register block pattern categories
 * 
 * *****************************************************/
function aploblock_register_block_pattern_categories() {

	register_block_pattern_category(
		'aploblocks/aploblocks',
		array( 'label' => esc_html__( 'AploBlocks', 'aploblocks' ) )
	);


}
add_action( 'init', 'aploblock_register_block_pattern_categories');
