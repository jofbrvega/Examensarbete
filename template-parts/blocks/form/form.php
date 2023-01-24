<?php
$form_heading = get_field('form_heading');
$form_shortcode = get_field('form_shortcode');
?>

<section class="w-full max-w-screen-xl p-4 mx-auto">
    <div class="grid grid-cols-2 gap-10">
        <div class="flex flex-col justify-center p-4">
            <h2 class=""><?= $form_heading; ?></h2>
        </div>
        <div class="p-4">
                <?php echo do_shortcode($form_shortcode); ?>
        </div>
    </div>
</section>