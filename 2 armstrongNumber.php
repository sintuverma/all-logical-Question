<?php
// arm strong number 153 = (1*1*1)+(5*5*5)+(3*3*3 )=153 this is armstrong number
$num = 153;
$arm =$num;
$total=0;
//$rem=0;
while($arm!=0)
{
    $rem = $arm%10;
    $total= $total+$rem*$rem*$rem;
    $arm=$arm/10;
}
if($num == $total)
{
    echo " $num is arm  strong number";
}
else
{
    echo " $num is not arm strong number" ;
}
?>