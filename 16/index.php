<?php

if (!empty($_POST)) {
    $getOrder = $_POST['order'];
    $getQuantity = $_POST['quantity'];

    $clientOrder = [];

    foreach ($getOrder as $key => $value) {
        $_SESSION[$key] = $getQuantity[$key];
    }
}

require_once('template.php');
