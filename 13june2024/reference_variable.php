<?php
 $value1 = "Hello";
 $value2 =& $value1;    

 $value2 = "Goodbye";  

  $value1 = "Today is last class before EID";

  echo $value2;
 ?>