<?php
$hero_slider = get_field('hero_slider');
?>

<section class="py-4 max-w-screen-2xl">
    <div class="splide">
        <div class="splide__track ">
            <ul class="splide__list">
                <?php
                if (have_rows('hero_slider')) :
                    while (have_rows('hero_slider')) : the_row();
                        $hero_slider_image = get_sub_field('hero_slider_image');
                ?>
                        <li class="flex justify-center splide__slide">
                            <img src="<?php echo $hero_slider_image['url']; ?>" alt="<?php echo $hero_slider_image['alt']; ?>" class="object-cover h-[70vh]">
                            <div class="absolute top-10 right-10">
                                <a data-fslightbox href="<?php echo $hero_slider_image['url']; ?>" alt="<?php echo $hero_slider_image['alt']; ?>" class="text-white w-fit">
                                    <i class="text-4xl fa-light fa-arrow-up-right-from-square"></i>
                                </a>
                            </div>
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