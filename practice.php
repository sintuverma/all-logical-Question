<?php
// Prime Number devide by itself = 3,5,7,11,13,
$num = 12;
$flag = 0;
for($i=2;$i<$num;$i++)
{
    if($num%$i!=0)
    {
        $flag =1;
        break;
    }
    
    
}
if($flag ==1)
    {
        echo "prime number";
    }
    else
    {
        echo"not prime number";
    }
?>