<?php
// (i) In PHP multiple inheritance not supported it have interface option and it implements by implements keyword
// (ii) In interface you can't declare properties.
// (iii) In interface you can't declare a body of a method it will be declare when you implement the that interface
// (iv) In interface you can't declare a function protected and private.
interface A
{
    //public $name ="vinod";
    //protected or private function display();
    public function display();
}
class base implements A
{
    public function hello()
    {
        echo "this is hello fuction of base <br>";
    }
    public function display()
    {
        echo "this is display function of interface with body";
    }
    
}
$obj= new base();
$obj->hello();
$obj->display();
?>