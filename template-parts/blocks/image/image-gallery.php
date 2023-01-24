<?php
$hero_slider = get_field('image_gallery');
?>

<section class="border-b-2 max-w-screen-2xl">
    <div class="splide">
        <div class="splide__track ">
            <ul class="splide__list">
                <?php
                if (have_rows('image_gallery')) :
                    while (have_rows('image_gallery')) : the_row();
                        $image_gallery_slider = get_sub_field('image_gallery_slider');
                ?>
                        <li class="flex justify-center splide__slide">
                            <img class="object-cover h-[70vh] loading=lazy" src="<?php echo $image_gallery_slider['url']; ?>" alt="<?php echo $image_gallery_slider['alt']; ?>">
                            <div class="absolute top-10 right-10">
                                <a data-fslightbox href="<?php echo $image_gallery_slider['url']; ?>" alt="<?php echo $image_gallery_slider['alt']; ?>" class="text-white w-fit">
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