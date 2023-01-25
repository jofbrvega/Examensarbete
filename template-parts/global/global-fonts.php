<?php
$font_family = get_field('global_font_family', 'options');
?>

<?php
if ($font_family == "wtmg") : ?>
    <style>
        * {
            font-family: 'Times New Roman', Times, serif;
        }
        h1 {
            font-weight: bold;
            font-size: xx-large;
            padding-bottom: 1rem;
        }

        h2 {
            font-weight: bold;
            font-size: x-large;
            padding-bottom: 1rem;
        }

        h3 {
            font-size: larger;
            padding-bottom: 1rem;
        }

        h4 {
            font-size: large;
            padding-bottom: 1rem;
        }

        h5 {
            font-size: large;
            padding-bottom: 1rem;
        }

        h6 {
            font-size: large;
            padding-bottom: 1rem;
        }
    
        p,
        div,
        {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: large;
        }
    </style>
<?php endif;
?>