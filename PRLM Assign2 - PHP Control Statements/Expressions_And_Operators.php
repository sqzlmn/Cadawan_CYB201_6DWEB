<?php
/*
CREATED BY: ADRIANE LOUIS S. CADAWAN
SECTION: CYB201

This Includes:
EXPRESSIONS AND OPERATORS
IF AND ELSE 
*/
$menu1 = ["Cappuccino", "Americano", "Frappe", "Caramel Macchiato", "Pink Drink"];
$menu2 = [150, 150, 150, 150, 150];
$cart = [0,"1",2,3,4];
$totalPrice = 0;

foreach ($cart as $index) {
    $totalPrice += $menu2[$index];
}
$HasToPayTaxes = true;

if ($HasToPayTaxes == false) {
    $tax = 0;
} else {
    $tax = $totalPrice * "0.20";  
}

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
            <li><?php echo $menu1[0]; ?> -------------- P<?php echo $menu2[0]; ?></li>
            </div>
            <div class="listitem1">
            <li><?php echo $menu1[1]; ?> -------------- P<?php echo $menu2[1]; ?></li>
            </div>
            <div class="listitem1">
            <li><?php echo $menu1[2]; ?> -------------- P<?php echo $menu2[2]; ?></li>
            </div>
            <div class="listitem1">
            <li><?php echo $menu1[3]; ?> -------------- P<?php echo $menu2[3]; ?></li>
            </div>
            <div class="listitem1">
            <li><?php echo $menu1[4]; ?> -------------- P<?php echo $menu2[4]; ?></li>
            </div>
        </ul>
    </div>

    <div id="CART: 🛒">
        <div class="cartbox">
        <h3>CART: 🛒</h3>
        <?php
            foreach ($cart as $index) {
            echo "<p>{$menu1[$index]} — P{$menu2[$index]}</p>";
        }
        ?>
        <p><strong>SubTotal: P<?php echo $totalPrice; ?></strong></p>
        <p><strong>Tax: P<?php echo $tax; ?></strong></p>
        <p><strong>Total: P<?php echo $grandTotal; ?></strong></p>
        </div>
        <?php
            include "footer.html";
        ?>
    </div>
</body>
</html>