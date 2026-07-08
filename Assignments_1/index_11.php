<?php

// task (same values)
$arr1 = ['a', 'b', 'c', 'd'];
$arr2 = ['c', 'd', 'e', 'f'];
for ($i = 0; $i < count($arr1); $i++) {
    for ($j = 0; $j <count($arr2) ; $j++) {
        if ($arr1[$i] === $arr2[$j]) {
            echo $arr1[$i] . "<br>";
        }
    }
}
