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
        // Image gallery block
        acf_register_block_type(
            array(
                'name'              => 'image-gallery-slider',
                'title'             => __('Image/Slider'),
                'description'       => __('Image/Slider - block'),
                'render_template'   => 'template-parts/blocks/image/image-gallery.php',
                'render_callback' => 'block_render',
                'category'          => 'blocks',
                'icon'              => 'admin-comments',
                'mode'               => 'edit',
                'keywords'          => array('image/slider'),
            )
        );
        // Image/text block
        acf_register_block_type(
            array(
                'name'              => 'image-text',
                'title'             => __('Image/Text'),
                'description'       => __('Image/Text - block'),
                'render_template'   => 'template-parts/blocks/image/image-text.php',
                'render_callback' => 'block_render',
                'category'          => 'blocks',
                'icon'              => 'admin-comments',
                'mode'               => 'edit',
                'keywords'          => array('image-text'),
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
        // Employees
        acf_register_block_type(
            array(
                'name'              => 'employees',
                'title'             => __('Employees'),
                'description'       => __('Employees - block'),
                'render_template'   => 'template-parts/blocks/employees.php',
                'render_callback' => 'block_render',
                'category'          => 'blocks',
                'icon'              => 'admin-comments',
                'mode'               => 'edit',
                'keywords'          => array('employees'),
            )
        );
        // Premises
        acf_register_block_type(
            array(
                'name'              => 'premises',
                'title'             => __('Premises'),
                'description'       => __('Premises - block'),
                'render_template'   => 'template-parts/blocks/premises.php',
                'render_callback' => 'block_render',
                'category'          => 'blocks',
                'icon'              => 'text',
                'mode'               => 'edit',
                'keywords'          => array('premises'),
            )
        );
    }
};

function whitelist_blocks($allowed_block_types, $post)
{
    if ($post->post_type == 'post') :
        return array(
            'core/heading',
            'core/paragraph',
            'core/image',
            'core/separator',
            'core/media-text',
            'core/spacer',
            'core/shortcode',
            'acf/video',
            'acf/form'
        );
    else :
        return array(
            'core/spacer',
            'core/media-text',
            'core/image',
            'acf/employees',
            'acf/form',
            'acf/hero-50',
            'acf/hero-slider',
            'acf/hero',
            'acf/image-gallery-slider',
            'acf/image-text',
            'acf/maps',
            'acf/premises',
        );
    endif;

    switch ($post->post_type) {
        default:
            return $allowed_block_types;
    }
}
add_filter('allowed_block_types', 'whitelist_blocks', 10, 2);



