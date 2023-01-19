<?php
$form_heading = get_field('form_heading');
$form_shortcode = get_field('form_shortcode');
?>

<section class="grid h-[70vh] grid-cols-2 py-4 mt-4 text-center">
    <div class="flex flex-col justify-center w-full text-center">
        <h3><?= $form_heading; ?></h3>
    </div>
    <div class="flex flex-col justify-center mx-auto text-center">
        <?php echo do_shortcode($form_shortcode); ?>
    </div>
</section>