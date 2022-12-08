<?php
$index = 0;
#answer in for :
    for(; $index <= 20; $index += 2)
    if($index != 0 )
    echo $index ."<br>";
    
    #answer in while :
        $index = 0;
        echo "############################" . "<br>";
        while($index <= 20)
        {
            if($index != 0 )
            echo $index ."<br>";
            $index+=2;
        }
        echo "############################" . "<br>";
        #answer in do while :
$index = 0;
do{
    if($index != 0 )
        echo $index ."<br>";
        $index+=2;

}while($index <= 20)
?>

