<section class="w-full max-w-screen-xl px-4 py-4 mx-auto border-b border-gray-500 lg:py-10">
    <div class="flex flex-col items-center w-full space-x-0 space-y-6 border-b contacts xl:w-10/12 lg:flex-row lg:pr-half-column lg:border-b-0 xl:border-r border-primary-darker section-inner--padding-y-sm xl:space-y-0 lg:space-x-6 xl:space-x-12 xl:items-baseline">
        <?php
        if (have_rows('employees')) :
            while (have_rows('employees')) : the_row();
                $employees_image = get_sub_field('employees_image');
                $employees_title = get_sub_field('employees_title');
                $employees_name = get_sub_field('employees_name');
                $employees_phone = get_sub_field('employees_phone');
                $employees_email = get_sub_field('employees_email');
        ?>
                <div class="flex flex-col w-2/3 contact lg:w-full md:flex-row md:items-center md:space-x-8">
                    <img class="object-cover w-full h-full mb-2 aspect-square md:w-1/2 md:mb-0" src="<?php echo $employees_image['url']; ?>" alt="<?php echo $employees_image['alt']; ?>">
                    <div class="flex flex-col space-y-1 text-center md:w-1/2">
                        <div><?= $employees_title; ?></div>
                        <h6><?= $employees_name; ?></h6>
                        <div><?= $employees_phone; ?></div>
                        <div><?= $employees_email; ?></div>
                    </div>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
    </div>
</section>