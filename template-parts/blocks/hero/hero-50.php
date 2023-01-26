<?php
$hero_50_heading = get_field('hero_50_heading');
$hero_50_text = get_field('hero_50_text');
$hero_50_image = get_field('hero_50_image');
?>

<section class="w-full max-w-screen-xl px-4 py-4 mx-auto border-b border-gray-500 lg:py-10">
    <div class="grid grid-span-2 lg:grid-cols-2 lg:gap-10">
        <div class="flex flex-col justify-center order-0">
            <?php if ($hero_50_image) : ?>
            <img class="loading=lazy" src="<?php echo $hero_50_image['url']; ?>" alt="<?php $hero_50_image['alt']; ?>">
        </div>
        <?php endif; ?>
        <div class="flex flex-col justify-center order-1 p-4">
            <h1 class="py-4"><?php echo esc_attr($hero_50_heading); ?></h1>
            <h3 class="block"><?php echo esc_attr($hero_50_text); ?></h3>
        </div>
    </div>
</section>