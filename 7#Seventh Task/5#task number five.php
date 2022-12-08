<?php
function check_status($a, $b, $c) {
    $name = $a;
    $age = $b;
    $avilability = $c;
    foreach([$a,$b,$c] as $var)
    {
        foreach([$a,$b,$c] as $value)
        {
            if (gettype($value) == "string")
                $name = $value;
          else if(gettype($value) == "integer")
                $age = $value;
            else
                $avilability = $value;
        }
    }
    echo "Hello $name, Yor Age Is $age, You Are " . ($avilability ? "" : "Not") . " Abilable For Work";
  }
  
  // Needed Output
  echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>";
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>";
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>";
  echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
?>

