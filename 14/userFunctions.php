<?php

function getUsersFromJSON($pathToFile)
{
    $json = file_get_contents($pathToFile);
    try {
        $jsonUsers = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
    } catch (JsonException $ex) {
        return 'Не вдалось відкрити файл' ;
    }

    return $jsonUsers;
}

function getUserInfo($userLogin, $userPassword, $users){
    if (!is_array($users) || empty($users)){
        return 'Список користувачів відсутній';
    }
    if (!is_string($userLogin) || !is_string($userPassword)){
        return 'Не вірний формат логіну чи пороля';
    }

    foreach ($users as $user){
        if ($user['login'] === $userLogin && $user['password'] === $userPassword){
            return $user;
        }
    }
    return 'Користувача з таким логіном та паролем не існує';
}

$users = getUsersFromJSON('./users_list.json');
var_export(getUserInfo('Kirby', '72Cb5aU', $users));
