<?php
$image_text_layout = get_field('image_text_layout');
$image_text_image = get_field('image_text_image');
$image_text_heading = get_field('image_text_heading');
$image_text_text = get_field('image_text_text');
?>

<section class="w-full max-w-screen-xl px-4 py-4 mx-auto border-b-2 lg:border-none lg:py-10">
    <div class="grid grid-span-2 lg:grid-cols-2 lg:gap-10">
        <div class="flex justify-center <?= ($image_text_layout == 'textleft') ? 'order-1' : 'order-0'; ?>">
            <img class="loading=lazy" src="<?php echo $image_text_image['url']; ?>" alt="<?php echo $image_text_image['alt']; ?>">
        </div>
        <div class="flex flex-col justify-center p-4 <?= ($image_text_layout == 'textleft') ? 'order-0' : 'order-1'; ?>">
            <h2 class="py-4"><?= $image_text_heading; ?></h2>
            <div class="block"><?= $image_text_text; ?></div>
        </div>
    </div>
</section>