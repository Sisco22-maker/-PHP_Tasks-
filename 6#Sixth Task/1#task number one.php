<?php
// Write Function Content Here
function greeting($name,$gender = "dfault")
{
    $prefix = ($gender == "Male" ? "Mr" : (($gender == "Female") ? "Miss" : ""));
    return "hello $prefix $name";
}
// Needed Output
echo greeting("Osama", "Male");
echo "<br>"; // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo "<br>"; // Hello Mr Osama
echo greeting("Sameh"); // Hello Sameh
echo "<br>"; // Hello Mr Osama

?>

