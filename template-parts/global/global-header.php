<?php
$global_logotype = get_field('global_logotype', 'options');
?>

<header>
    <div x-data="{isOpen: false}">
        <div class="flex <?= ($global_logotype) ? 'justify-between' : 'justify-end'; ?> ">
            <?php if ($global_logotype) : ?>
                <img class="object-cover h-16" src="<?= esc_url($global_logotype['url']); ?>" alt="<?= esc_url($global_logotype['alt']); ?>">
            <?php endif; ?>
            <button type="button" aria-label="toggle-menu" @click="isOpen = !isOpen">
                <img class="h-16" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/icon-hamburger-menu.png" alt="hamburger-menu">
            </button>
        </div>
        <div x-show="isOpen" x-transition x-transition:enter.duration.500ms x-transition:leave.duration.500ms class="flex flex-col justify-center h-[50vh] p-32 text-center">
            <?php
            if (have_rows('header_menu_top', 'options')) :
                while (have_rows('header_menu_top', 'options')) : the_row();
                    $header_menu_top_links = get_sub_field('header_menu_top_links', 'options');
                    if ($header_menu_top_links) :
                        $header_menu_top_links_url    = $header_menu_top_links['url'];
                        $header_menu_top_links_title  = $header_menu_top_links['title'];
                        $header_menu_top_links_target = $header_menu_top_links['target'] ? $header_menu_top_links['target'] : '_self';
                    endif;?>
                    <div class="p-4">
                        <a href=" <?= esc_url($header_menu_top_links_url); ?>" target="<?= esc_attr($header_menu_top_links_target); ?>" class="w-full mt-2 font-bold normal-case truncate text-l underline-offset-0 desktop-links">
                            <?= esc_html($header_menu_top_links_title); ?>
                        </a>
                    </div>
            <?php
            endwhile;
            endif;
            ?>
        </div>
    </div>
</header>