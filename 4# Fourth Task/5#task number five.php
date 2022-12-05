<?php
$points = 10;
$alter = $points;
$points += true + !($points <=> $points)+true;

// Write Your Code Here

echo $points; // 13
echo "<br>";
// Write Your Code Here
$points = $alter;
$points -= true + !($points <=> $points);
echo $points; // 8;

?>