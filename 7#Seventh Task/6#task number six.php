<?php
// Write Function Content Here
function calculate($num_one,$num_two,$sign = "a")
{

if($sign[0] === "a")
{
        return $num_one + $num_two;

}else if($sign[0] === "s")
{
    return $num_one - $num_two;
}else
{
    return $num_one * $num_two;
}
}
// Needed Output
echo calculate(10, 20); // 30
echo "<br>";
echo calculate(10, 20, "a"); // 30
echo "<br>";
echo calculate(10, 20, "s"); // -10
echo "<br>";
echo calculate(10, 20, "subtract"); // -10
echo "<br>";
echo calculate(10, 20, "multiply"); // 200
echo "<br>";
echo calculate(10, 20, "m"); // 200
?>

