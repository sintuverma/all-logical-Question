<?php
// fibonacci series 0,1,1,2,3,5,8,13,21,34
$n1 = 0;
$n2 = 1;
$n3 = "";
$limit = 10;
for($i=1;$i<=$limit;$i++)
{ 
    echo $n1.",";
    $n3 = $n1+$n2;
    $n1 = $n2;
    $n2 = $n3;
}
?>