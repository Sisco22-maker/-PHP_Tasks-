<?php
$admins = ["Osama", "Ahmed", "Sayed"];
if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $Check = $_POST['user'];
    if($Check === $admins[0])
    {
        echo "The Request Method Is Post And Username Is $Check". "<br>";
        echo "This Username Osama Is Admin";
    }else if($Check === $admins[1])
    {
        echo "The Request Method Is Post And Username Is $Check". "<br>";
        echo "This Username Osama Is Admin";
    }else if($Check === $admins[1])
    {
        echo "The Request Method Is Post And Username Is $Check". "<br>";
        echo "This Username Osama Is Admin";
    }else
    {
    echo "The Request Method Is Post And Username Is $Check". "<br>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="index.php" method="POST">
          <input type="text" name="user">
          <input type="submit" value="Send">
        </form>
        
        </body>
        </html>
