<?php
// Write Function Content Here
function sum_all(...$nums)
{
    $all = 0;
    foreach($nums as $value)
    {
        if ($value == 5)
            continue;
        else if ($value == 10)
            $value = 20;
        $all += $value;
    }
    return $all;
}
// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo "<br>";
echo sum_all(5, 10, 5, 10); // 40
?>

