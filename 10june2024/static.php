<?php 
    function myTest() {
       static $x = 0;
        // $x;
        $x += 7;
        return $x;
    }
    
    echo myTest();
    echo myTest();
    myTest();
    myTest();
?>