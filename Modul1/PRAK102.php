<?php
    $base_length =8.9;
    $height = 5.4;
    $width = 14.7;

    $base_width = $base_length*$width;

    $rectangle = 1/3*$base_width*$height;

    echo "Volume limas: " . number_format($rectangle, 3, '.', '') . " cm³";

?>
