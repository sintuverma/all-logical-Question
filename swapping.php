
<?php
//swap two number
$a = 100;
$b = 200;
$a = $a+$b; // a: 300;
$b = $a-$b; // b: 100;
$a = $a-$b; // a: 200
echo "a -> $a "." "." b->$b <br>";

// swap using third varible
$x =10;
$y =20;
$temp =0;
$temp = $x;
$x = $y;
$y =$temp;

echo "x->$x"." "."y->$y";
?>