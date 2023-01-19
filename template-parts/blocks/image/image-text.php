<?php
$image_text_layout = get_field('image_text_layout');
$image_text_image = get_field('image_text_image');
$image_text_heading = get_field('image_text_heading');
$image_text_text = get_field('image_text_text');
?>

<section class="py-4 mx-auto max-w-screen-2xl">
    <div class="grid grid-cols-2">
        <div class="flex justify-center <?= ($image_text_layout == 'textleft') ? 'order-1' : 'order-0'; ?>">
            <img src="<?php echo $image_text_image['url']; ?>" alt="<?php echo $image_text_image['alt']; ?>">
        </div>
        <div class="flex flex-col justify-center text-center <?= ($image_text_layout == 'textleft') ? 'order-0' : 'order-1'; ?>">
            <h1 class="py-4"><?= $image_text_heading; ?></h1>
            <h3 class="block"><?= $image_text_text; ?></h3>
        </div>
    </div>
</section>