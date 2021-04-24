<?php

function task1(array $arrayStrings, bool $print = false)
{
    array_walk(
        $arrayStrings,
        function (&$value, $key) {
            $value = "<p>$value</p>";
        }
    );

    if ($print) {
        return implode(' ', $arrayStrings);
    }

    foreach ($arrayStrings as $str) {
        echo $str;
    }
}

function task2(string $operation)
{
    if (func_num_args() < 3) {
        return "Вы передали недостаточно аргументов";
    }

    $operands = func_get_args();
    array_shift($operands);
    $operand1 = array_shift($operands);

    if ($operation === '+') {
        foreach ($operands as $operand) {
            $operand1 += $operand;
        }
    } elseif ($operation === '-') {
        foreach ($operands as $operand) {
            $operand1 -= $operand;
        }
    } elseif ($operation === '*') {
        foreach ($operands as $operand) {
            $operand1 *= $operand;
        }
    } elseif ($operation === '/') {
        foreach ($operands as $operand) {
            $operand1 /= $operand;
        }
    } else {
        return "Недопустимая операция $operation";
    }
    return $operand1;
}

function task3(int $heightTable, int $widthTable)
{
    if ($heightTable < 1 || $widthTable < 1) {
        echo "Невозможно создать таблицу умножения $heightTable x $widthTable<br />\n";
        echo "Размеры таблицы должны быть целыми числами больше 0";
        return;
    }

    echo "<table border='1px' cellpadding='10' cellspacing='0'>" .
        "<caption>Таблица умножения $heightTable x $widthTable</caption>";
    echo "<tr><th><b>*</b></th>";
    for ($i = 1; $i <= $widthTable; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";

    for ($i = 1; $i <= $heightTable; $i++) {
        echo "<tr> <td><b>$i</b></td> \n";
        for ($y = 1; $y <= $widthTable; $y++) {
            echo "<td><center>" . $i * $y . "</center></td> ";
        }
        echo "</tr>\n";
    }
    echo "</table>";
}

function task4()
{
    echo date("d.m.Y H:m"), "<br />\n";
}

function task5()
{
    echo strtotime("24.02.2016 00:00:00"), "<br />\n";
}

function task6()
{
    $str = "Карл у Клары украл Кораллы";
    echo "Исходный текст: $str<br />\n";
    echo "Результат: " . str_replace('К', '', $str), "<br />\n";
}

function task7()
{
    $str = "Две бутылки лимонада";
    echo "Исходный текст: $str<br />\n";
    echo "Результат: " . str_replace('Две', 'Три', $str), "<br />\n";
}

function task8()
{
    $text = "Hello again!\n";
    file_put_contents("test.txt", $text, FILE_APPEND);
}

function task9(string $nameFile)
{
    echo file_get_contents($nameFile);
}
