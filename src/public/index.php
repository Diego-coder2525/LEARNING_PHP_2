<?php
declare(strict_types=1);
require_once  "../Transaction.php";
// Classes & Objects
$transaction = new Transaction(10,"Transaction 1");

// var_dump($transaction->x);
// $transaction->amount = 25;

$transaction->addTax(80);
$transaction->applyDiscount(15);

var_dump($transaction->getAmount());