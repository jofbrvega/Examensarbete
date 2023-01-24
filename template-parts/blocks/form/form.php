<?php
$form_heading = get_field('form_heading');
$form_shortcode = get_field('form_shortcode');
?>

<section class="w-full max-w-screen-xl p-4 py-10 mx-auto border-b-2">
    <div class="grid lg:gap-10 grid-span-2 lg:grid-cols-2">
        <div class="flex flex-col justify-center p-4">
            <h6 class=""><?= $form_heading; ?></h6>
        </div>
        <div class="p-4">
            <?php echo do_shortcode($form_shortcode); ?>
        </div>
    </div>
</section>