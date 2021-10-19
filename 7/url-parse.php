<?php

$url = $argv[1];
$query = [];

// ** url as option parameter with shortcut options
foreach (parse_url($url) as $key => $value):

    echo $key . ': ';
    echo "'$value'" . PHP_EOL;
    $query += [$key => $value];

endforeach;

// *** print query as array with arguments
$lastKey = array_key_last($query);
$lastValue = array_pop($query);

echo PHP_EOL . 'query:  [';

foreach ($query as $key => $value):
    echo $key . ' => ' . $value . ', ';
endforeach;

echo $lastKey . ' => ' . $lastValue . ']' . PHP_EOL;
