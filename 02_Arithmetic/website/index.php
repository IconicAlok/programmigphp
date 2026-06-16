<?php
// Arithmetic operators
// + - * / ** %

$x = 10;
$y = 3;
$z = null;

//$z = $x + $y;
// $z = $x - $y;
// $z = $x * $y;
// $z = $x / $y;
// $z = $x ** $y;
$z = $x % $y;

echo "$z<br>";

// increment and decrement operators
// ++, --

$counter = 0;

$counter -= 3;
echo $counter . "<br>";

// operator precedence
// ()
// **
// * / %
// + -

$total = 1 + 2 - 3 * 4 / 5 ** 6;
echo $total;
