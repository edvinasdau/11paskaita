<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        body {
            background-color: blue;
        }
        .pix {
            width: 50px;
            height: 50px;
            float: left;
        }
        .g {
            background-color: yellow;
        }
        .z {
            background-color: green;
        }
        .r {
            background-color: red;
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

$img = ["g","g","g","g","g","g","z","z","z","z","z","z","r","r","r","r","r","r"];

$h = 1;

foreach ($img as $pixel) {
    echo '<div class="pix '. $pixel .'"></div>';
    if ($h == 6){
        $h = 1;
        echo '<div class="br"></div>';
        } else{ 
            $h++;
        }
}
