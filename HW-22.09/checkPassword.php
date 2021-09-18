<?php

/*
 - дана переменная $password, в которой хранится пароль пользователя.
Если количество символов пароля больше 7 и меньше 12,
то выведите пользователю сообщение о том, что пароль подходит,
иначе: сообщение о том, что нужно придумать другой пароль.

 */

echo "Введіть пароль: ";
system('stty -echo');

$password = trim(fgets(STDIN));

system('stty echo');
echo PHP_EOL;

$passwordLength = iconv_strlen($password);

if ($passwordLength < 7 ){
    echo "Ваш пароль '$password' занадто коротний, мінімальна кількість символів 7!";

} elseif ($passwordLength > 13) {
    echo "Ваш пароль '$password' занадто довгий, максимальна кількість символів 13!";
} else {
    echo "Ваш паоль '$password' підходить!";
}
