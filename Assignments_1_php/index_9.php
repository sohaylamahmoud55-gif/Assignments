<?php

// task (boolean)
$tests = [1, "tariq", 1.5, true, 7, 's', false];
echo "<pre>";
print_r($tests);

// with for //
for ($i = 0; $i < count($tests); $i++) {
    if ($tests[$i] === true) { 
        $tests[$i] = 'yes';
    } elseif ($tests[$i] === false) {
        $tests[$i] = 'no';
    }
}
echo "<pre>";
print_r($tests);

// with while //
$i = 0;
while ($i < count($tests)) {
    if ($tests[$i] === true) {
        $tests[$i] = 'yes';
    } elseif ($tests[$i] === false) {
        $tests[$i] = 'no';
    }
    $i++;
}
echo "<pre>";
print_r($tests);
