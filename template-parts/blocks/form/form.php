<?php
$form_heading = get_field('form_heading');
$form_shortcode = get_field('form_shortcode');
?>

<section class="flex flex-row p-8 mx-auto">
    <div class="flex justify-center w-full py-8">
        <div class="flex flex-col justify-center w-full lg:w-1/2">
            <h1 class="lg:max-w-3/4"><?= $form_heading; ?></h1>
        </div>
    </div>
    <div class="flex flex-col justify-center w-full py-8 text-center lg:flex-row">
        <div class="flex flex-col justify-center w-full lg:w-1/2">
            <div class="">
                <?php echo do_shortcode($form_shortcode); ?>
            </div>
        </div>
    </div>
</section>