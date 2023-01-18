<?php
 // perfect number = 6=> 6/1, 6/2, 6/3 =>>1+2+3=> 6
for($num = 1; $num<=1000;$num++)
{
//$num = 6;
$perf = $num;
$sum = 0;
for($i=1;$i<$num;$i++)
{
    if($num%$i==0)
    {
        $sum = $sum+$i;
    }
    
}
if($sum == $perf)
{
    echo "Perfect Number:- $perf <br>";
}
}
?>