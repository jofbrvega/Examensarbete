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
            'render_template'   => 'template-parts/blocks/hero/hero.php',
            'render_callback' => 'block_render',
            'category'          => 'blocks',
            'icon'              => 'admin-comments',
            'mode'               => 'edit',
            'keywords'          => array( 'hero' ),
            )
        );
            // Hero-slider
            acf_register_block_type(
                array(
                    'name'              => 'hero-slider',
                    'title'             => __('Hero-slider'),
                    'description'       => __('Hero - sliderblock'),
                    'render_template'   => 'template-parts/blocks/hero/hero-slider.php',
                    'render_callback' => 'block_render',
                    'category'          => 'blocks',
                    'icon'              => 'admin-comments',
                    'mode'               => 'edit',
                    'keywords'          => array('hero-slider'),
                )
            );// Hero-50/50
        acf_register_block_type(
            array(
                'name'              => 'hero-50',
                'title'             => __('Hero-50/50'),
                'description'       => __('Hero 50/50 - sliderblock'),
                'render_template'   => 'template-parts/blocks/hero/hero-50.php',
                'render_callback' => 'block_render',
                'category'          => 'blocks',
                'icon'              => 'admin-comments',
                'mode'               => 'edit',
                'keywords'          => array('hero-50/50'),
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
                'category'          => 'blocks',
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
                'category'          => 'blocks',
                'icon'              => 'admin-comments',
                'mode'               => 'edit',
                'keywords'          => array('two-column'),
            )
        );

        

    }
};