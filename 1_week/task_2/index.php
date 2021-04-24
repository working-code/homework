<?php

require_once 'src/functions.php';

$arrayStrins = [
    "Text 1",
    "More text",
    "Super text"
];

//task 1
task1($arrayStrins);
echo task1($arrayStrins, true), "<br />\n";

//task2
echo task2('+', 2, 3.5, 4), "<br />\n";
echo task2('-', 2, 3.5, 4), "<br />\n";
echo task2('*', 2, 3.5, 4), "<br />\n";
echo task2('/', 2, 3.5, 4), "<br />\n";
echo task2('+', 2), "<br />\n";
echo task2('%', 2, 3.5, 4), "<br />\n";
