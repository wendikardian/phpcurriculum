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

    function fav_activity(string $name, bool $isRain = true) : string {
        if($isRain){
            return "Hei {$name}, do indoor exercise for your health";
        }else{
            return "{$name}, go out make interaction with others and jogging for the five miles!";
        }

    }


    $act = fav_activity("Simon");
    echo "<br>";
    echo "<br>";
    echo $act;
    echo "<br>";
    $act2 = fav_activity("Simon", false);
    echo $act2;
    echo "<br>";

?>