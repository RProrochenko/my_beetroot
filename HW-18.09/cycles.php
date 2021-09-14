<?php
$users = [];
$users[9] =    ["name" => "Pavlo", "email" => "Pavlo@test.com", "language" => "de"];
$users[13] =    ["name" => "Victor", "email" => "Victor@test.com", "language" => "en"];
$users[22] =    ["name" => "Victor", "email" => "Victor@test.com", "language" => "en"];
$users[77] =    ["name" => "Victor", "email" => "Victor@test.com", "language" => "en"];
$users[85] =    ["name" => "Victor", "email" => "Victor@test.com", "language" => "en"];
$users[103] =    ["name" => "Victor", "email" => "Victor@test.com", "language" => "en"];
$users[12] =    ["name" => "Evgen", "email" => "Evgen@test.com", "language" => "fr"];
$users[17] =    ["name" => "Evgen", "email" => "Evgen@test.com", "language" => "fr"];
$users[104] =    ["name" => "Michel", "email" => "Michel@test.com", "language" => "ua"];
$users[99] =    ["name" => "Masha", "email" => "Masha@test.com", "language" => "ua"];
$users[56] =    ["name" => "Masha", "email" => "Masha@test.com", "language" => "ua"];
$users[36] =    ["name" => "Katya", "email" => "Katya@test.com", "language" => "ru"];
$users[11] =    ["name" => "Boris", "email" => "Boris@test.com", "language" => "de"];
$users[29] =    ["name" => "Michel", "email" => "Michel@test.com", "language" => "de"];
$users[47] =    ["name" => "Boris", "email" => "Boris@test.com", "language" => "de"];


$countedUsers = array_count_values(array_column($users, 'name'));

foreach ($countedUsers as $user => $quantity){
    if ($quantity < 2){
        unset($countedUsers[$user]);
    }
}

echo 'Кількість користувачів з однаковим імям: ' . PHP_EOL;
var_export($countedUsers);
echo PHP_EOL . '-----------------------------------------' . PHP_EOL;

$langs = array_unique(array_column($users, 'language'));
$langUsers = [];

foreach ($langs as $lang) {
    $tempArray = [];

    foreach ($users as $user) {
        if ($user['language'] === $lang){

            unset($user['language']);
            array_push($tempArray, $user);

        }
    }

    $langUsers[$lang] = $tempArray;
}

echo 'Філтр користувачів по однаковій мові: ' . PHP_EOL;
var_export($langUsers);
echo PHP_EOL . '-----------------------------------------' . PHP_EOL;

$reverseUsers = [];

foreach ($users as $user) {
    array_push($reverseUsers, $user);
}

krsort($reverseUsers);

echo 'Перевернутий список користувачів: ' . PHP_EOL;
var_export($reverseUsers);
echo PHP_EOL . '-----------------------------------------' . PHP_EOL;
