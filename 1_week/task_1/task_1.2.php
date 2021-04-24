<?php

const COUNT_PICTURE = 80;
const COUNT_DONE_MARKERS = 23;
const COUNT_DONE_PENCILS = 40;

$countPaints = COUNT_PICTURE - COUNT_DONE_MARKERS - COUNT_DONE_PENCILS;
echo "На школьной выставке 80 рисунков. 23 из них выполнены фломастерами, 
40 карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?<br />\n";
echo "Количество рисунков выполненных красками - $countPaints шт.<br />\n";
