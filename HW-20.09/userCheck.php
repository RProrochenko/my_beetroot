<?php

$getUsername = $_POST['username'];
$getPassword = $_POST['password'];

$file = fopen('authentication', 'r');

while(!feof($file)) {

    $authParam = explode(' ', trim(fgets($file)));
    $logger = fopen('logs/'. $getUsername . '.log', 'a');

    $checkUsername = $authParam[0] === $getUsername;
    $checkPassword = $authParam[1] === $getPassword;

    if ($checkUsername && $checkPassword ) {

        fwrite($logger, date('H:i:s d-m-Y ') . $getUsername .' logged in!' . PHP_EOL);
        fclose($logger);
        echo $getUsername;
        break;

    }
}

fclose($file);
