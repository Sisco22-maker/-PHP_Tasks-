<?php
$str = 'aAa';
$num = 3;
$char = "_";

echo str_repeat(strtolower(substr_replace($str, $char, $num)),$num);
//there are too much ways to make this replacement but this what came in my minde:) 
//أنا الان في ضيق ففضلا ادع لي لعل الله يستجيب منك :)
// Write Your Code Here

// aaa_aaa_aaa_
?>
