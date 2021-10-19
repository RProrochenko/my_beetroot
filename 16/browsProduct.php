<?php

function browsProduct()
{
    $products = getProductFromJSON('./products.json');

    echo '<thead class="w3-teal"><th style="width:30%">Назва</th><th>Ціна</th><th>Кількість</th><th>Обрати</th></thead>';
    echo '<tr>';
    foreach ($products as $product) {
        echo '<tr>';
        echo "<td>$product[name]</td>";
        echo "<td>$product[cost]</td>";
        echo "<td><input type='number' name='quantity[$product[name]]' value='1' min='1' max=$product[quantity]></td>";
        echo "<td><input type='checkbox' name='order[$product[name]]'> </td>";
        echo '</tr>';
        echo '</tr>';
    }
    echo '</tr>';
    echo '</table>';
    echo '<input type="submit" value="Send">';
}

function browsSession()
{
    echo '<thead class="w3-teal"><th style="width:30%">Назва</th><th>Кількість</th></thead>';
    echo '<tr>';
    foreach ($_SESSION as $name => $quantity) {
        echo '<tr>';
        echo "<td>$name</td>";
        echo "<td>$quantity</td>";
        echo '</tr>';
    }
    echo '</tr>';
    echo '</table>';
}
