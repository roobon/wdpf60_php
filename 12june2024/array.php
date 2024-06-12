<?php 

    //Numeric indexed array
    $rivers = array("Padma", "Meghna", "Jamuna", "Surma");

    echo "<pre>";
    print_r($rivers);

    $rivers[10]= "Tista";
    $rivers[11]= "Gomti";
    print_r($rivers);
    echo "<hr>";


    //Associative array 

    //$capitals = ["Bangladesh"=>"Dhaka", "Srilanka"=>"Colombo", "Nepal"=>"Katmondu"];

    $capitals = array("Bangladesh"=>"Dhaka", "Srilanka"=>"Colombo", "Nepal"=>"Katmondu");

    $capitals["Bhutan"] = "Thimpu";
    print_r($capitals);





?>