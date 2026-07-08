<?php

// task (function with array )
function sum()
{
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $total = 0;
    for ($x = 0; $x < count($arr); $x++) {
        $total += $arr[$x];
        // echo $total . "<br>";
    }
    echo $total;
}
sum();
