<?php

// task bubble sort with RouteBubble() function
$arr = [1, 8, 9, 3, 5, 4, 7, 2, 6];
echo "<pre>";
print_r($arr);
function RouteBubble($arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {

            // If the current element is greater than the next one, swap them
            if ($arr[$j] > $arr[$j + 1]) {
                // Swap
                $temp = $arr[$j]; // $temp = 9 
                $arr[$j] = $arr[$j + 1]; // $arr[$j] = 3  
                $arr[$j + 1] = $temp; // $arr[$j + 1] = 9 
            }
        }
    }
    return $arr;
}
RouteBubble($arr);
echo "<pre>";
print_r(RouteBubble($arr));