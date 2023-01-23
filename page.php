<?php get_header(); ?>

<div> </div>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) :
        the_post();
        the_content();
    endwhile; ?>
<?php endif; ?>

<?php
get_footer();
