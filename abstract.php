<?php
// abstract method you can't declare. you can only define and implement in inherit (extends). it will be must implement in derived class if you cant't implement then it will show the fatal error. if you declare a class abstract then you will be define at least one abstract function. when you define a abstract function then the class will be automatic abstract class
abstract class  base{
    public $name;
    public function hii($n)
    {
        echo "this is a hii function ".$this->name = $n."<br>";
    }
   public abstract function display();
        
}
class derived extends base {
    public function show()
    {
        echo "this is my show function <br>";
    }
    public function display()
    {
        echo " this is the base display abstract function ";
    }
}
$obj1= new derived();
$obj1->show();
$obj1->hii("vinod");
$obj1->display();

// this abstract class with properties
abstract class abs{
    public $name;
    public function show($n)
    
    {
        $this->name= $n;
        echo "this is show abs class function $this->name";
    }
    public abstract function display();
   
   
}
class A extends abs{

    public function hello()
    {
        echo "thid is hello function ";
    }
    public function display()
    {
        echo "Hi Abstract Method And Class <br>";
    }
}
$obj = new A();
$obj->display();
$obj->hello();
$obj->show("vinod");
?>
