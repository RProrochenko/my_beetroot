<?php
$users = [];
$users[2] =    ["name" => "Pavlo", "email" => "Pavlo@test.com", "lang" => "de"];
$users[13] =    ["name" => "Victor", "email" => "Victor@test.com", "lang" => "en"];
$users[12] =    ["name" => "Evgen", "email" => "Evgen@test.com", "lang" => "fr"];
$users[8] =    ["name" => "Masha", "email" => "Masha@test.com", "lang" => "ua"];
$users[11] =    ["name" => "Katya", "email" => "Katya@test.com", "lang" => "ru"];
$users[7] =    ["name" => "Boris", "email" => "Boris@test.com", "lang" => "de"];

$greetings = [
    'ua' => 'Привіт користувач!',
    'ru' => 'Привет пользователь!',
    'en' => 'Hello user!',
    'fr' => 'Bonjour lutilisateur!',
    'de' => 'Hallo benutzer!',
];

ksort($users);

$firstUser = end($users);
$lastUser = reset($users);

echo $greetings[$firstUser['lang']] . PHP_EOL;

if ($firstUser['lang'] !== $lastUser['lang']) {
    echo $greetings[$lastUser['lang']] . PHP_EOL;
}
