<?php 
add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        // Block.
        acf_register_block_type(array(
            'name'              => 'block',
            'title'             => __('Block Name'),
            'description'       => __('Block Description'),
            'render_template'   => 'template-parts/blocks/block.php',
            'render_callback' => 'block_render',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'mode'               => 'edit',
            'keywords'          => array( 'text' ),
            'example' => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'image' => '<img src="' . get_template_directory_uri() . '/assets/block-previews/block.png' . '" style="display: block; margin: 0 auto;">'
                    ),
                ),
            )
            )
        );
    }
};