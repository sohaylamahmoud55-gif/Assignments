<?php
$valid=[
    'username' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'my_options' => ['options' => ['regexp' => '/^[A-Z][a-z]{2,}$/']],
        'error' => 'UserName must start with a capital letter'

    ],
];