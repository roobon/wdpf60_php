<?php
class SimpleClass
{
    public $var = 'a default value<br>'; 
    public const a="America<br>"; 
 
    public function displayVar() {
        echo $this->var;
    }

    public function displayConst() {
        echo "Hello World";
    }
}



SimpleClass::displayConst();
?>