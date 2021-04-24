<?php

echo "<table border='1px' cellpadding='10' cellspacing='0'><caption>Таблица умножения 10 * 10</caption>";
echo "<tr><th><b>*</b></th>";
for ($i = 1; $i <= 10; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr> <td><b>$i</b></td> \n";
    for ($y = 1; $y <= 10; $y++) {
        if ($i % 2 == 0 && $y % 2 == 0) {
            echo "<td>(" . $i * $y . ")</td> ";
        } elseif ($i % 2 != 0 && $y % 2 != 0) {
            echo "<td>[" . $i * $y . "]</td> ";
        } else {
            echo "<td>" . $i * $y . "</td> ";
        }
    }
    echo "</tr>\n";
}
echo "</table>";
