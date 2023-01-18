<?php 
add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        // Form
        acf_register_block_type(
            array(
                'name'              => 'form',
                'title'             => __('Form'),
                'description'       => __('Form - block'),
                'render_template'   => 'template-parts/blocks/form/form.php',
                'render_callback' => 'block_render',
                'category'          => 'blocks',
                'icon'              => 'admin-comments',
                'mode'               => 'edit',
                'keywords'          => array('form'),
            )
        );
        // Gallery
        acf_register_block_type(
            array(
                'name'              => 'image',
                'title'             => __('Image'),
                'description'       => __('Image - block'),
                'render_template'   => 'template-parts/blocks/image/image-gallery.php',
                'render_callback' => 'block_render',
                'category'          => 'blocks',
                'icon'              => 'admin-comments',
                'mode'               => 'edit',
                'keywords'          => array('image'),
            )
        );
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
                'description'       => __('Hero 50/50 - block'),
                'render_template'   => 'template-parts/blocks/hero/hero-50.php',
                'render_callback' => 'block_render',
                'category'          => 'blocks',
                'icon'              => 'admin-comments',
                'mode'               => 'edit',
                'keywords'          => array('hero-50/50'),
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
        // Maps
        acf_register_block_type(
            array(
                'name'              => 'maps',
                'title'             => __('Maps'),
                'description'       => __('Maps - block'),
                'render_template'   => 'template-parts/blocks/maps.php',
                'render_callback' => 'block_render',
                'category'          => 'blocks',
                'icon'              => 'admin-comments',
                'mode'               => 'edit',
                'keywords'          => array('maps'),
            )
        );

        

    }
};