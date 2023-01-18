<?php
$form_heading = get_field('form_heading');
$form_shortcode = get_field('form_shortcode');
?>

<section class="grid w-full max-w-screen-xl grid-cols-2 py-2 mx-auto mt-4 text-center">
    <div class="flex flex-col justify-center text-center">
        <h1><?= $form_heading; ?></h1>
    </div>
    <div class="p-4">
        <div class="flex flex-col justify-center text-center">
            <?php echo do_shortcode($form_shortcode); ?>
        </div>
    </div>
</section>