<?php
#100
// Method One 
echo gettype(100);
// Method Two
echo "<br>";
var_dump((100));
// Method Three => Optional
// i found one way i think we can use it 
echo "<br>";
if(is_numeric(100))
{
    echo "int";
}
?>