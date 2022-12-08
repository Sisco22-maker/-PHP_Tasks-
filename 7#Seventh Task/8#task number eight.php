<?php
$message = "Hello";
/*
#صل على النبي الأول :)
#explanation for this code:
    -first you want to use the value stored in variable message
    -yes but you are not allowed to create another varibale named Hello
    -so you have to use variable variable to make the value in variable message 
    -could be used as variable 
    -then we used anonymos function to deal with calling as a variable like => Hello("osama")
*/
$$message = function ($name) use ($message) {
    return "$message $name";
};

echo $Hello("Osama"); // Hello Osama
?>

