<?php
/*
CREATED BY: ADRIANE LOUIS S. CADAWAN
SECTION: CYB201

This Includes:
SHORTHAND ECHO
FOR LOOP
*/
$menu1 = ["Cappuccino", "Americano", "Frappe", "Caramel Macchiato", "Pink Drink"];
$menu2 = [110, 120, 130, 140, 150];
$cart = [0,1,2,3];
$totalPrice = 0;


for ($i=0;$i < count($cart); $i++) {
    $totalPrice += $menu2[$i];
}

$tax = $totalPrice * 0.20;  
$grandTotal = $totalPrice + $tax;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cozy Cafe</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        h1,h2,h3,ul,li {text-align: center;}
        h2 {font-style: italic;}
        ul {list-style-type: none;}
    </style>
</head>
<body>
    <div id="Cozy Cafe">
        <h1>Cozy Cafe</h1>
        <h2>WHAT WOULD YOU LIKE TO TRY TODAY?</h2>
        <h3>Drinks Menu: 🥤</h3>
        <ul>
            <div class="listitem1">
            <li><?= $menu1[0]; ?> -------------- P<?= $menu2[0]; ?></li>
            </div>
            <div class="listitem1">
            <li><?= $menu1[1]; ?> -------------- P<?= $menu2[1]; ?></li>
            </div>
            <div class="listitem1">
            <li><?= $menu1[2]; ?> -------------- P<?= $menu2[2]; ?></li>
            </div>
            <div class="listitem1">
            <li><?= $menu1[3]; ?> -------------- P<?= $menu2[3]; ?></li>
            </div>
            <div class="listitem1">
            <li><?= $menu1[4]; ?> -------------- P<?= $menu2[4]; ?></li>
            </div>
        </ul>
    </div>

    <div id="CART: 🛒">
        <div class="cartbox">
        <h3>CART: 🛒</h3>
        <?php
        for ($i = 0; $i < count($cart); $i++) {
            echo "<p>{$menu1[$i]} — P{$menu2[$i]}</p>";
        }
        ?>
        <p><strong>SubTotal: P<?= $totalPrice; ?></strong></p>
        <p><strong>Tax: P<?= $tax; ?></strong></p>
        <p><strong>Total: P<?= $grandTotal; ?></strong></p>
        </div>
        <?php
            include "footer.html";
        ?>
    </div>
</body>
</html>