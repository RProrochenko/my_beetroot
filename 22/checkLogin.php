<?php
require_once '../healthcheck/mysql.php';

if (!empty($_POST)) {
    checkUserAuth($connection, $_POST['Login'], $_POST['Password']);
}

function checkUserAuth($db_connet, $userLogin, $userPassword){
    $smtp = $db_connet->prepare("select * from users where login = ?");
    $smtp->execute([$userLogin]);

    $user = $smtp->fetch();

    if ($user && $user['password'] == $userPassword){
        echo 'Привіт ' . $user['username'];
    } else {
        echo "Не вірно вказаний користувач або пароль!";
    }


}
