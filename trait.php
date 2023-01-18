<?php
 trait A{
     
     public function hello()
     {
      echo " This is hello function of trait A <br>";   
     }
 }

class traitClass
{
    use A;
    public function hello()// this function call first and will be execute
    {
        echo "this is trait class function";
    }
    
}
$obj = new traitClass();
$obj->hello();
$obj->hello();
?>