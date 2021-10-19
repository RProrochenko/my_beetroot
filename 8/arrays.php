<?php
$users = [];
$users[2] =    ["name" => "Pavlo", "email" => "Pavlo@test.com"];
$users[13] =    ["name" => "Victor", "email" => "Victor@test.com"];
$users[12] =    ["name" => "Evgen", "email" => "Evgen@test.com"];
$users[8] =    ["name" => "Masha", "email" => "Masha@test.com"];
$users[11] =    ["name" => "Katya", "email" => "Katya@test.com"];
$users[7] =    ["name" => "Boris", "email" => "Boris@test.com"];


echo "Total users: " . count($users) . PHP_EOL;

krsort($users);
var_export($users);

$firstUser = end($users);
$secondUser = prev($users);

$lastUser = reset($users);
$penultimateUser = next($users);

var_export(compact('firstUser', 'lastUser', 'secondUser', 'penultimateUser'));

$minID = array_search($firstUser, $users);

echo PHP_EOL . 'User with ID ' . $minID . ' will be deleted' .  PHP_EOL;
unset($users[$minID]);
