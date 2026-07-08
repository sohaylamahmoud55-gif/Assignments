<?php

// task(search)
$films = ["Fast", "Predestination", "Persuit", "Prestige"]; //,"avatar"];
$keyword = "avatar";
$x = '';
foreach ($films as $film) {
    if ($film == $keyword) {
        $x = true;
        break;
    }
}
if ($x) {
    echo "yes";
} else {
    echo "no";
}
