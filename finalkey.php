<?php
// (i) final keyword use in php. when you use final keyword before class then you can't inherit(extends) of base class.
// (ii) Use final keywrod before with the base class function then you can't override function in derived class.
// (iii) You can't use final keyword with properties(variable) of class you can use final keyword with class and methods.
  class base
{ 
    //public final $name; 
    public  function  display()
    {
        echo "this is a base class";
        //echo $this->name;
    }
        
}
class derived extends base
{
    public function show()
    {
        echo "this is a derived class";
    }
   // public function display()
    //{
      //  echo "this is display function";
    //}
}
$obj = new derived();
$obj->show();
//$obj->name="vinod";
//$obj->display();
?>