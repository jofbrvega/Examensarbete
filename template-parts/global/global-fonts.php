<?php
$font_family = get_field('font_family', 'options');
?>

<?php
if ($font_family == "wtmg") : ?>
    <style>
        h1 {
            font-weight: bold;
            font-size: xx-large;
        }
        h2 {
            font-weight: bold;
            font-size: x-large;
            ;
        }
        h3 {
            font-size: larger;
            ;
        }
        h4 {
            font-size: large;
        }

        h5 {
            font-size: large;
        }
        h6 {
            font-size: large;
        }
        p {
            line-height: 1.5em;
        }
    </style>
<?php endif;
?>