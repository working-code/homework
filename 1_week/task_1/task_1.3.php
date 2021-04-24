<?php

$age = mt_rand(0, 99);
echo "Возраст = $age<br />\n";

if ($age >= 18 && $age <=65) {
    echo "Вам еще работать и работать<br />\n";
} elseif ($age > 65) {
    echo "Вам пора на пенсию<br/>\n";
} elseif ($age >= 1 && $age <= 17) {
    echo "Вам ещё рано работать<br />\n";
} else {
    echo "Неизвестный возраст<br />\n";
}
