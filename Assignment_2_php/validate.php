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


$valid=[
    'username' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'my_options' => ['options' => ['regexp' => '/^[A-Z][a-z]{3,}$/']],
        'error' => 'UserName must start with a capital letter'

    ],
    'password' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'my_options' => ['options' => ['regexp' => '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,16}$/']],
        'error' => 'password must be 8-16 characters and contain both letter and number'
    ],
        'email' => [
        'filter' => FILTER_VALIDATE_EMAIL,
        'error' => 'Invalid email, Please enter a valid email address'

    ],
    'phoneNumber' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'my_options' => ['options' => ['regexp' => '/^01[0125][0-9]{8}$/']],
        'error' => 'enter phone number start with 011 or 010 or 012 or 015'

    ],
    'facebook_url'=>[
        'filter'=>FILTER_VALIDATE_URL,
        'error' => 'Please enter a valid Facebook URL'
    ],
      'twitter_url'=>[
        'filter'=>FILTER_VALIDATE_URL,
        'error' => 'Please enter a valid Twitter URL'
    ],
      'instagram_url'=>[
        'filter'=>FILTER_VALIDATE_URL,
        'error' => 'Please enter a valid Instagram URL'
    ],
];
