<?php

//в переменной $date лежит дата формата '31-12-2020'. Преобразуйте эту дату в формат '2020.12.31'
$date = '31-12-2020';
$changedDate = date("Y.m.d", strtotime($date));

echo $changedDate;
