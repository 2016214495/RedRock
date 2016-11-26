<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <title>homework6</title>
</head>
<body>
<?php

    $box1 = "sun";
    $box2 = "sun";
    $box3 = "sun";

    $box1_value = "green";
    $box2_value = "blue";
    $box3_value = "black";

$boxes = array(
    
    $box1 => $box1_value,
    $box2 => $box2_value,
    $box3 => $box3_value,

    );

    foreach ($boxes as $box => $box_value) {
        echo $box .':'. $box_value;
        echo "<br>";
    }

    ?>
</body>
</html>