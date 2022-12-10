<?php
// Write Function Content Here
function multiply(...$numsMix)
{
    $all = 1;
    foreach($numsMix as $vlaueMix)
    {
        if (gettype($vlaueMix) == "string")
            continue;
        else if (gettype($vlaueMix) == "double")
            $vlaueMix = (int) $vlaueMix;
        $all *= $vlaueMix;
    }
    return $all;
}
// Needed Output
echo multiply(10, 20);
echo "<br>"; // 200
echo multiply("A", 10, 30); // 300
echo "<br>"; // 200
echo multiply(100.5, 10, "B"); // 1000
echo "<br>"; // 200
?>

