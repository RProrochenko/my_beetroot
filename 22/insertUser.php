<?php
require_once '../healthcheck/mysql.php';

if (!empty($_POST)) {
    insertUser($connection, $_POST['Username'], $_POST['Login'], $_POST['Password'], $_POST['Email']);

}

function insertUser($db_connet, $username, $login, $password, $email){
    $smtp = $db_connet->prepare("INSERT INTO users 
                                    VALUES (?, ?, ?, ?)");

    var_dump($smtp->execute([$username, $login, $password, $email]));

    #$smtp->execute([$username, $login, $password, $email]);
    echo 'Користувач створений';

}