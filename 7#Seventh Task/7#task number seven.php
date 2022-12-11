<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

// Output
echo ucwords(strtolower(str_replace([1,2],[],implode($chars))));
//he did n't make a condition to avoid using numbers in the question :)
"Elzero"
?>
