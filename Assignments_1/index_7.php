<?php

// task (counting)
$films = ["avatar","Prestige","avatar","Prestige"]; //,"avatar"];
$keyword = "avatar";
$x = 0;
foreach ($films as $film) {
    if ($film == $keyword) {
        $x++;
    }
}
echo $x;