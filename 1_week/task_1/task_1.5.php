<?php

$bmw = [
    'model' => 'X5',
    'spped' => 120,
    'doors' => 5,
    'year' => 2015
];
$toyota = [
    'model' => 'RAV4',
    'spped' => 160,
    'doors' => 5,
    'year' => 2019
];
$opel = [
    'model' => 'Mokka',
    'spped' => 120,
    'doors' => 5,
    'year' => 2014
];

$cars['bmw'] = $bmw;
$cars['toyota'] = $toyota;
$cars['opel'] = $opel;

foreach ($cars as $carName => $carData) {
    echo "CAR $carName<br>\n";
    echo implode(' ', $carData) . "<br><br>\n\n";
}
