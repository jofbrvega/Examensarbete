<?php
$font_family = get_field('font_family', 'options');
?>

<?php
if ($font_family == "wtmg") : ?>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        h1 {
            font-weight: bold;
            font-size: xx-large;
        }
        h2 {
            font-weight: bold;
            font-size: x-large;
        }
        h3 {
            font-size: larger;
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
    </style>
<?php endif;
?>