<?php

    function say_hello() : void {
        echo "Hello World, this is function say_hello";
    }

    say_hello();


    function my_activity(bool $isRain) : string{
        if($isRain){
            return "Do indoor exercise for your health";
        }else{
            return "Go outside and do some exercise";
        }
    }

    echo "<br>";
    echo "<br>";

    $activity = my_activity(false);
    echo $activity;
?>