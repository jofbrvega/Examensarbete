<?php
$form_heading = get_field('form_heading');
$form_shortcode = get_field('form_shortcode');
?>

<section class="w-full max-w-screen-xl p-4 mx-auto mt-4">
        <div class="w-full md:w-2/3">
            <?php echo do_shortcode($form_shortcode); ?>
        </div>
</section>