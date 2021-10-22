<?php

include_once 'Worker.php';

$ivan = new Worker('Иван', 25, 1000);
$vasya = new Worker('Вася', 26, 2000);

echo $ivan->getSalary() + $vasya->getSalary() . PHP_EOL;
