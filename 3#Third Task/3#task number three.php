<?php
$a = 200;
$b = &$a;#we but here just & ":
$a = 100;
//you can assign the vars by refrence thus you can change it's values:)

echo $b; // 100

?>