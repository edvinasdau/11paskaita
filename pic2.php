<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        body {
            background-color: orange;
        }
        .pix {
            width: 50px;
            height: 50px;
            border: 1px solid grey;
            float: left;
        }
        .j {
            background-color: black;
        }
        .b {
            background-color: white;
        }
        .br {
            clear: both;
        }
    </style>
</head>
<body>

</body>
</html>

<?php

$img = ["j", "b", "b", "b", "b", "j", "j","j", "b", "b",];

$h = 1;

foreach ($img as $pixel) {
    echo '<div class="pix '. $pixel .'">'.$pixel.'</div>';
    if ($h == 4){
        $h = 1;
        echo '<div class="br"></div>';
        } else{ 
            $h++;
        }
}
