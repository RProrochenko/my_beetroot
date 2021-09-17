<?php

$size = 5;
$num = 1;
$z = $size;
$temp = [];

for ($i = 1; $i !== $size; $i++) {


    for ($j = 1 ; $j !== $size; $j++){

        $temp[$i][$j]=$num;
        $num++;

    }

    $temp[$i][$j]=$num;
    $num++;
}

var_export($temp);
