<?php

try {
    $connection = new PDO('mysql:host=database;port=3306;dbname=beetroot', 'beetroot', 'beetroot');
    $connection->query('select 1');

} catch (Throwable $e) {
    print "Error!: {$e->getMessage()} <br/>";
}