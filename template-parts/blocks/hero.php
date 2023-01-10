<?php
$hero_image = get_field('hero_image');
$hero_heading = get_field('hero_heading');
$hero_text = get_field('hero_text');
?>

<?php if ($big_hero_bg_image) : ?>
<section class="w-full h-[70vh] bg-center bg-cover flex flex-col" style="background-image: url('<?php echo $hero_image['url']; ?>');">
    <div>
        <h1 class="text-6xl"><?php echo esc_attr($hero_heading); ?></h1>
    </div>
</section>
<?php endif; ?>