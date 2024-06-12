<?php 

    $x = 50;
    $output = (double) $x;
    var_dump($output);

    echo gettype($output);
    echo "<br>";


    $number = 50.45;
    $output = (integer) $number;

    echo $output;
    echo "<br>";
    
    $name = (bool) "Rahim";
    echo $name;

    echo "<hr>";


    $score = 1114;
    $scoreboard = (array) $score;
    echo $scoreboard[0]; // Outputs 1114
    var_dump($scoreboard);
 
    echo "<hr>";

    $model = "Toyota";
    $obj = (object) $model;
    print_r($obj);
    print $obj->scalar; // returns "Toyota"
?>