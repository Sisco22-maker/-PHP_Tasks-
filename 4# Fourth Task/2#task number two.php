<?php
$a = "10";

// Needed Ouput
echo +$a; //method number one
echo "<br>";
var_dump(+$a);
echo "<br>";
echo $a * 1; //method number two
echo "<br>";
var_dump($a * 1);
echo "<br>";
echo $a ^ 0; //method number three
echo "<br>";
var_dump($a ^ 0);
echo "<br>";
echo (int)$a; ////method number four
echo "<br>";
var_dump((int)$a);
echo "<br>";
#For The People Who Love Searching
echo intval($a); //method number five
echo "<br>";
var_dump(intval($a));
echo "<br>";
intval(settype($a,"integer"));
echo $a; //method number six
echo "<br>";
var_dump($a);


?>