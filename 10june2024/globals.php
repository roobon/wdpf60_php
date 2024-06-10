<?php 

$x = 5;
$y = 10;
$p = 30;

function myTest() {
   $x = 3; $y = 2;
  $y = $x + $y;
}

myTest();
echo $y; // outputs 15

echo "<pre>";
print_r($GLOBALS);

?>