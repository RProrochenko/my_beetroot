<?php

$getUsername = 'username';
$getPassword = 'password';

$authentication = fopen('authentication', 'r');
$userCredentials = [];

while(!feof($authentication)) {

    $authParam = explode(' ', trim(fgets($authentication)));

    if ($authParam[0] === '') {
        break;
    }
    $userCredentials[$authParam[0]] = $authParam[1];
}
fclose($authentication);

$logger = fopen('logs/'. $getUsername . '.log', 'a');

if (!isset($userCredentials[$getUsername])){

    $authentication = fopen('authentication', 'a');

    fwrite($authentication, $getUsername . ' ' . $getPassword . PHP_EOL);
    fwrite($logger,date('H:i:s d-m-Y ') . $getUsername .' is registered!' . PHP_EOL);

    fclose($authentication);

    echo 'Користувач ' .$getUsername. ' створений з паролем ' . $getPassword;

} elseif ($userCredentials[$getUsername] === $getPassword) {

    fwrite($logger, date('H:i:s d-m-Y ') . $getUsername .' logged in!' . PHP_EOL);
    echo $getUsername;

} elseif ($userCredentials[$getUsername] !== $getPassword){
    echo 'Не вірний пароль, спробуйте ще!';
    fwrite($logger, date('H:i:s d-m-Y ') . $getUsername .' entered the wrong password!' . PHP_EOL);
}

fclose($logger);
