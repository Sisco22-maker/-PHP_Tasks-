<?php
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

// 1
echo substr_count($str, $e,$four);
// 2
echo "<br>";
echo substr_count($str, strtolower($o), -$four);
//this language has many string functions i can't memorize all of them:(
?>
