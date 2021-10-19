<?php

function getProductFromJSON($pathToFile)
{
    $json = file_get_contents($pathToFile);
    try {
        $jsonProduct = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
    } catch (JsonException $ex) {
        return 'Не вдалось відкрити файл';
    }

    return $jsonProduct;
}
