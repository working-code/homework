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
echo task2('/', 2, 3.5, 0), "<br />\n";

//task3
echo "<br />\n";
task3(7, 10);
echo "<br />\n";
task3(0, 10);
echo "<br />\n";
task3(3, 15);
echo "<br />\n";
task3(3, -10);
echo "<br />\n";

//task4
task4();
task5();

//task5
task6();
task7();

//task6
task8();
task9('test.txt');
