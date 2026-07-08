<?php

// task (get random)  
$n = 10;
function  RouteRandomPass($n)
{
    $characters = '_ABCDEFGHIJKLMNopqrstuvwxyz@0123456789';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = random_int(0, strlen($characters) - 1);  //random_int(min, max)
        $randomString .= $characters[$index];
    }
    return $randomString;
}
echo  RouteRandomPass($n);
// echo "<br>";

// // substr(string,start,length)  &&  
// //str_shuffle(string) Randomly shuffle all characters of a string

// echo substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, $n);