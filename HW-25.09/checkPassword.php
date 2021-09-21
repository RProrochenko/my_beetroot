<?php

$users = USERS;

foreach ($users as $key => $user){
    if (iconv_strlen($user['password']) < 8){
        unset($users[$key]);
    }
}

define("USERS_WITH_GOOD_PASSWORD", $users);
