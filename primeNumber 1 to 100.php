<?php
//prime number devide by self=>11
for($num=1;$num<=100;$num++)
{
//$num = 4;
$flag =0;
for($i=2;$i<$num;$i++)
{
    if($num%$i==0)
    {
        $flag =1;
        break;
    }
}
if($flag != 1)
{
    echo "  prime number=> $num <br>";
}
}
?>