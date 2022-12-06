<?php
$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18) {
  echo "The Age Is Good To Go<br>";
  if (gettype($name) === "string") {
    echo "The Name Is Good To Go<br>";
    if ($country === "Egypt") {
      echo "The Country Is Good To Go<br>";
    }
  }
}
echo "<br>";
#in this method we used && and i have learned c++ before so it's easy for me to use it what about you ? :)
echo ($age > 18 && gettype($name) === "string" && $country === "Egypt") ? "The Age Is Good To Go<br>" . "The Name Is Good To Go<br>" . "The Country Is Good To Go<br>" : "";

#Needed Output
#"The Age Is Good To Go"
#"The Name Is Good To Go"
#"The Country Is Good To Go"

?>

