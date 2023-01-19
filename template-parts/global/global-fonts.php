<?php
$font_family = get_field('font_family', 'options');
?>

<?php 
if ($font_family == 'wtmg'){
    echo get_template_part('./resources/css/global/wtmg-typography.php');
}
?>
