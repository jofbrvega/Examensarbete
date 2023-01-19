<?php get_header(); ?>

<div> </div>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) :
        the_post();
        the_content();
    endwhile; ?>
<?php endif; ?>

<div class="border-b-4 border-<?= $navigation_border_color; ?>"> </div>
<?php
get_footer();
