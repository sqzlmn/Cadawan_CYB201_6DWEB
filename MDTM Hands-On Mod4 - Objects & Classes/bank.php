<!--
Adriane Louis S. Cadawan
CYB201
-->

<?php
require 'classes/Account.php';
require 'classes/Customer.php';

$accountList = [
    new Account(20489446, 'Checking', -200.00),
    new Account(20148896, 'Savings', 450.00),
    new Account(30559112, 'Payroll', 17880.50),
    new Account(40112233, 'Digital Wallet', 1000.75)
];

$client = new Customer(
    'Adriane Louis', 
    'Cadawan', 
    'ascadawan@gmail.com', 
    'SecretPassword', 
    $accountList
);

include 'includes/header.php'; 
?>

<h1>NAME: <?= $client->getFullName(); ?></h1>

<table>
    <thead>
        <tr>
            <th>ACCOUNT NUMBER</th>
            <th>ACCOUNT TYPE</th>
            <th>BALANCE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($client->portfolio as $acc): ?>
            <?php 
                $statusClass = ($acc->getBalance() < 0) ? 'overdrawn' : 'important'; 
            ?>
            <tr>
                <td><?= $acc->number ?></td>
                <td><?= $acc->type ?></td>
                <td class="<?= $statusClass ?>">
                    ₱ <?= number_format($acc->balance, 0) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'includes/footer.php'; ?>