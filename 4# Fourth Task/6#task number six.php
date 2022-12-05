<?php
$a = "Elzero";
$b = "Web";
$c = "School";
echo "<pre>";
// Method One
$d = "$a $b $c";
echo $d; // Elzero Web School

// Method Two
$d = "{$a} {$b} {$c}";

echo $d; // Elzero Web School
// Method Three
$d = $a . " " . $b . " " . $c;
echo $d; // Elzero Web School

// Method Four
$d = "";
$d  .= $a. " ";
$d .= $b;
$d .= " " .$c;

echo $d; // Elzero Web School
echo "</pre>";

?>