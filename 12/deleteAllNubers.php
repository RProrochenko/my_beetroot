<?php
//- дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. В нашем случае должна получится строка 'abcbdefgh'
$string = '1a2b3c4b5d6e7f8g9h0';

$stringWithoutNubers = preg_replace('/\d/', '', $string);
echo $stringWithoutNubers . PHP_EOL;
