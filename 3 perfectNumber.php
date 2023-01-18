<?php
// perfect number is divided that numbers and adding equal to that number ex= 6/1,6/2/,6/3 and 1+2+3+=6 ==6 this is perfect number
//$num = 6;//6,28 perfect number
//perfect number :- 6=>6/1, 6/2, 6/3 = 1+2+3 ==6

for($num=1;$num<=1000;$num++)
{
$perf= $num;
$sum=0;
for($i=1;$i<$num;$i++)
{
    if($num%$i==0)
    {
        $sum =$sum+$i;
    }
}
if($perf == $sum)
{
    echo "perfect number $perf <br>";
}
}
?>