<?php
/*
CREATED BY: ADRIANE LOUIS S. CADAWAN
SECTIONl CYB201


*/
declare(strict_types = 1);
$tax_rate = 5.5;

$products = [
    "Cappuccino" => ["stock" => 12, "price" => 200],
    "Americano" => ["stock" => 13, "price" => 120],
    "Caramel Macchiato" => ["stock" => 14, "price" => 150],
    "Pink Drink" => ["stock" => 5, "price" => 170],
    "Hazelnut Frappe" => ["stock" => 5, "price" => 190],
    "Chocolate Chip Cookies" => ["stock" => 3, "price" => 70]
];

function get_reorder_message(int $available_stock):string {

    return ($available_stock < 10) ? 'Yes' : 'No';

}

function get_total_value(float $price, int $quantity): float {
    
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, float $tax_rate = 0): float {

    $total_value = get_total_value($price, $quantity);
    $tax_amount = $tax_rate / 100;

    return $total_value * $tax_amount;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Inventory Report</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 80%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h1>Cozy Cafe</h1>
    <h2>STOCK CONTROL</h2>

    <table>
        <thead>
            <tr>
                <th>Available Products</th>
                <th>Stocks Left</th>
                <th>Reorder?</th>
                <th>Total Value</th>
                <th>Total Tax Due</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $product_name => $data) {
            ?>
            <tr>
                <?php
                $price = $data['price'];
                $stock = $data['stock'];
                ?>
                <td><?=$product_name?></td>

                <td><?=$stock?></td>

                <td><?=get_reorder_message($stock)?></td>

                <td>PHP <?=get_total_value($price, $stock)?></td>

                <td>PHP <?=get_tax_due($price, $stock, $tax_rate)?></td>


            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>
</html>