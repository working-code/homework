<?php

$name = "Влад";
$age = '30';

echo "Меня зовут: $name<br />\n";
echo "Мне $age лет<br />\n";

$arrayChars = ['"', '!', '|', '/', "'", '"', '\\'];
foreach ($arrayChars as $char) {
    echo $char . "<br />\n";
}
