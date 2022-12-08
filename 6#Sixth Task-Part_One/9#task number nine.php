<?php
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
//when you just know how to combine conditions you will realise the conditions are much easier :)
for($i = 0; $i < 5; $i++)
{
    if($i % $help_num != 0 && $i < $help_num)
    {
        echo $names[$i] . "<br>";
    }
    
}
?>

