<?php
// Write Function Content Here
/*
#method number one to get the arguments passed to the function 
function get_arguments(...$words)
{
    $all = "";
foreach($words as $values)
{
        $all .= $values . " ";
}
    return $all;
}
*/
#method number two to get the aruments passed to the function
function get_arguments()
{
    $words = func_get_args();
    $n = func_num_args();
    $all = "";
    for($i = 0; $i < $n; $i++)
    {
        $all .= $words[$i] . " ";
    }
    return $all;
}
// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo "<br>";
echo get_arguments("I", "Love", "PHP"); // I Love PHP

?>

