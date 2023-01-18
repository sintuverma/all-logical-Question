<?php
 //153 =1*1*1+5*5*5+3*3*3=>153
for($i=1;$i<=1000;$i++)
{
    $num = $i;
    $sum = 0;
    $rem = 0;
    while($num!=0)
    {
        $rem = $num%10;
        $sum = $sum + $rem*$rem*$rem;
        $num = (int) ($num/10);
    }
    if($sum == $i)
    {
        echo "Armstrong number :- ".$i."<br>";
    }
    
}
?>