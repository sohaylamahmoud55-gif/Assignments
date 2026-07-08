<?php

// task (max)
$tests = [5, 4, 9, 3, 1, 7, 5, 8, 6]; //, 10];
$max = $tests[0];
for ($i = 1; $i < count($tests); $i++) {
    if ($tests[$i] > $max) {
        $max = $tests[$i];
    }
}
echo $max;