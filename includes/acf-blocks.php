<?php 
add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        // Hero
        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Hero'),
            'description'       => __('Hero - block'),
            'render_template'   => 'template-parts/blocks/hero.php',
            'render_callback' => 'block_render',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'mode'               => 'edit',
            'keywords'          => array( 'hero' ),
            )
        );

        // Gallery
        acf_register_block_type(
            array(
                'name'              => 'gallery',
                'title'             => __('Gallery'),
                'description'       => __('Gallery - block'),
                'render_template'   => 'template-parts/blocks/gallery.php',
                'render_callback' => 'block_render',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
                'mode'               => 'edit',
                'keywords'          => array('gallery'),
            )
        );

        // Two-column
        acf_register_block_type(
            array(
                'name'              => 'two-column',
                'title'             => __('Two-column'),
                'description'       => __('Two-column - block'),
                'render_template'   => 'template-parts/blocks/two-column-text-image.php',
                'render_callback' => 'block_render',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
                'mode'               => 'edit',
                'keywords'          => array('two-column'),
            )
        );

        

    }
};