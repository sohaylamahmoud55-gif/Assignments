<?php

$validates = [
    'email' => [
        'filter' => FILTER_VALIDATE_EMAIL,
        'error' => 'Invalid email, Please enter a valid email address'

    ],
    'password' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'my_options' => ['options' => ['regexp' => '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,16}$/']],
        'error' => 'password must be 8-16 characters and contain both letter and number'
    ],
];