<?php
$name = "Alok Kuri";
$food = "pizza";
$email = "fake123@gmail.com";

$age = 22;
$user = 2;
$quantity = 4;

$gpa = 2.50;
$price = 4.99;
$tax_rate = 5.1;

$employed = true;
$online = false;
$for_sale = true;

$total = null;

echo "You have orderd {$quantity} x {$food}s<br>";
$total = $quantity * $price;
echo "Your total is : \${$total}";
