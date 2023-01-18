<?php
 
//when we include two files and they have same class name it will show the error. you can't define same class and use same class if you want to use that class witout error then you will be define the namespace starting of program and you can use that class and its property by the name space.

include "product.php";
include "product2.php";

echo "you can't use same class it will be show the error <br>";
$obj1 = new pro\product();
$obj2 = new pro2\product();
$obj1->list1();
echo"<br>";
$obj2->list2();
?>