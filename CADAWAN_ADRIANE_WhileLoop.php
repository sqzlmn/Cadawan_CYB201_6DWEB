<?php
# NAME: ADRIANE LOUIS S. CADAWAN
# SECTION: CYB201
# DATE: 11/27/2025
$ToyKingdom = ["Gundam","Pokemon","Nerf Blasters"];
$Uniqlo = ["Airism Tee","Utility Jacket","Dry Pique Polo Shirt"];
$Cyberzone = ["Iphone 17","Sony XM5 Headset","Lumix Mirrorless Camera"];

$cart = [
    $Cyberzone[1],
    $Uniqlo[2],
    $Cyberzone[2],
    $ToyKingdom[0],
    $ToyKingdom[1],
    $Cyberzone[0]
];
#count method was used via online resources
$i = 0;
$items  = 0;
while($i < count($cart)) {
    $items++;
    $i++;
}

$MAX = 5;
$Message = "";

#FIRST CONDITIONAL STATEMENT
if ($items <= $MAX) {
    $Message = "Thank you for buying $items item(s).";
} else {
    $Message = "Cart has too many items ($items). Maximum is only $MAX.";
}


include "header.html";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Merry Christmas!</title>
<link rel="stylesheet" href="css/styles.css">

<style>
    h2{
        position: fixed;
        top: 100px;
        right: 100px;
        font-size: 3rem;
        font-weight: bold;
        color: yellow;
        background: red;
        padding: 10px 20px;
        border: 3px solid red;
        border-radius: 8px;
    }
    p,h3,h1,h2 {
            text-align: center;
    }
    h2 {font-style: italic;}
    ul {list-style-type: none;
        text-align:center;
    }
    div {
        border: 15px solid maroon;
        font-size: 3rem;
    }
    
</style>

</head>
<body>


<h1>Merry Christmas!!!</h1>
<h2>LASAGA 3 DAY SALE!<br>LET'S SHOP!</h2>
    <h3>Where would you like to buy?</h3>
    <p>Toy Kindom</p>
    <ul>
        <li><?php echo $ToyKingdom[0];?> ------------------- PHP 1000</li>
        <li><?php echo $ToyKingdom[1];?> ------------------- PHP 900</li>
        <li><?php echo $ToyKingdom[2];?> ------------------- PHP 1500</li>
    </ul>
    <br>
    <br>

        <p>Uniqlo</p>
    <ul>
        <li><?php echo $Uniqlo[0];?> ------------------- PHP 599</li>
        <li><?php echo $Uniqlo[1];?> ------------------- PHP 2599</li>
        <li><?php echo $Uniqlo[2];?> ------------------- PHP 699</li>
    </ul>
    <br>
    <br>

        <p>Cyberzone</p>
    <ul>
        <li><?php echo $Cyberzone[0];?> ------------------- PHP 76,000</li>
        <li><?php echo $Cyberzone[1];?> ------------------- PHP 25,000</li>
        <li><?php echo $Cyberzone[2];?> ------------------- PHP 45,000</li>
    </ul>
    <br>
    <br>



<H3>Cart: &#128722 (Cannot exceed more than 5 items)</H3>
<p>Items: 

<?php
#SECOND LOOP STATEMENT
foreach($cart as $item){
    echo "<p>$item</p>";
}
?>

<hr>
<p><strong><?php echo $Message; ?></strong></p>

</body>

<?php include "footer.html"; ?>
</html>
