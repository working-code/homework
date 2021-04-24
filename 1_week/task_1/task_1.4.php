<?php

$day = mt_rand(0, 15);
$dayJob = "Это рабочий день<br />\n";
$dayOutput = "Это выходной день<br />\n";
$dayUnknown = "Неизвестный день<br />\n";

echo "День = $day<br />\n";

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo $dayJob;
        break;
    case 6:
    case 7:
        echo $dayOutput;
        break;
    default:
        echo $dayUnknown;
        break;
}
