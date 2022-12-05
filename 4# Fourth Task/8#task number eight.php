<?php
// Code 1
$a = @$b or die("the var is not exist");

// Code 2
$f = @file("Not_A_File") or die("the file is not exist");

// Code 3
(@include("Not_A_File")) or die("the file is not exists");

?>