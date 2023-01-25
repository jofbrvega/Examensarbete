<?php
$global_logotype = get_field('global_logotype', 'options');
?>

<header class="z-50 w-full">
    <nav x-data="{isOpen: false}" class="flex items-center justify-between">
        <?php if ($global_logotype) : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img class="flex h-12" src="<?= esc_url($global_logotype['url']); ?>" alt="<?= esc_url($global_logotype['alt']); ?>">
            </a>
        <?php endif; ?>
        <button type="button" aria-label="toggle-menu" @click="isOpen = !isOpen" class="relative z-30 flex flex-col justify-between w-10 h-5 focus:outline-none top-1 open">
            <img class="h-10" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/icon-hamburger-menu.png" alt="hamburger-menu">
        </button>
        <div x-show="isOpen" x-transition x-transition:enter.duration.400ms x-transition:leave.duration.300ms class="fixed inset-y-0 right-0 z-20 flex justify-end visible w-full transition duration-500 ease-in-out bg-black opacity-100 flex-coll bg-opacity-60 open">
            <div class="flex flex-col text-center justify-center w-full transition duration-500 ease-in-out translate-x-0 bg-[#b4b8a5] md:w-1/2">
                <?php
                if (have_rows('header_menu_top', 'options')) :
                    while (have_rows('header_menu_top', 'options')) : the_row();
                        $header_menu_top_links = get_sub_field('header_menu_top_links', 'options');
                        if ($header_menu_top_links) :
                            $header_menu_top_links_url    = $header_menu_top_links['url'];
                            $header_menu_top_links_title  = $header_menu_top_links['title'];
                            $header_menu_top_links_target = $header_menu_top_links['target'] ? $header_menu_top_links['target'] : '_self';
                        endif; ?>
                        <div class="flex justify-center my-2 text-center">
                        <a href=" <?= esc_url($header_menu_top_links_url); ?>" target="<?= esc_attr($header_menu_top_links_target); ?>" class="flex items-center h-full text-center text-white">
                            <?= esc_html($header_menu_top_links_title); ?>
                        </a>
                    </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </nav>
</header>