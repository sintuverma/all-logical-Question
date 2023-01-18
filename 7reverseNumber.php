<?php
// reverse a number without use function  123 =321
$num = 123;
$revn="";
while($num!=0)
{
  $revn = $num%10;
  echo "$revn";
  $num = (int) ($num/10);
}
//echo "revrse number :- $revn";
?>