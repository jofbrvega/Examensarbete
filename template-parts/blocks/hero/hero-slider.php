<?php
$hero_slider = get_field('hero_slider');
?>

<section class="w-full">
    <div class="splide">
        <div class="splide-track">
            <ul class="splide__list">
                <?php
                if (have_rows('hero_slider')) :
                    while (have_rows('hero_slider')) : the_row();
                        $hero_slider_image = get_sub_field('hero_slider_image');
                ?>
                        <li class="splide__slide">
                            <img src="<?php echo $hero_slider_image['url']; ?>" alt="<?php echo $hero_slider_image['alt']; ?>" 
                            class="w-full h-[60vh] md:h-[80vh] object-cover">
                        </li>
                <?php
                    endwhile;
                endif;
                ?>
            </ul>
        </div>
    </div>
</section>
<script>
    var splide = new Splide('.splide', {});
    splide.mount();
</script>