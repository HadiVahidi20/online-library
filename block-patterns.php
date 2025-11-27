<?php
/**
 * Online Library: Block Patterns
 *
 * @since Online Library 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Online Library 1.0
 *
 * @return void
 */
function online_library_register_block_patterns() {
	$online_library_block_pattern_categories = array(
		'online-library'    => array( 'label' => __( 'Online Library', 'online-library' ) ),
	);

	$online_library_block_pattern_categories = apply_filters( 'online_library_block_pattern_categories', $online_library_block_pattern_categories );

	foreach ( $online_library_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'online_library_register_block_patterns', 9 );
