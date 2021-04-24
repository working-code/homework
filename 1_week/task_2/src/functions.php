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
