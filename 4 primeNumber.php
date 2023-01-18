<?php
//prime number devided by self 1,2,3,5,7,11,13
$num = 23;
$flag=0;
for($i=2;$i<$num;$i++)
{
  if($num%$i==0)
  {
    $flag=1;
    break;
  }
}
if($flag==1)
{
  echo "not prime number:- $num";
}
else{
  echo " prime number:- $num";
}
?>