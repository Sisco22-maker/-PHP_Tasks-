<?php
$mix = [1, 2, "A", "B", "C", 3, 4];
$counted = 0;
$ignored = 0;
for($i = 0; $i < 7; $i++)
{
    if(gettype($mix[$i]) != "integer")
    {
        $ignored++;
        continue;
    }
    $counted++;
}
echo $counted . " Numbers Printed" . "<br>" . $ignored . " Nubers Ignored" . "<br>";
?>

