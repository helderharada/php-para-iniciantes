<?php

$mixed = [
    'name' => 'Helder',
    [
        1, 5, 7, ['age' => 20]
    ],
];

print_r($mixed);

$mixed = [
    'name' => 'Helder',
    'numbers' => [
        1,
        5,
        7,
    ],
    'test' => [
        'age' => 20,
    ],
];

print_r($mixed);
