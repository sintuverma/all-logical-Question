<?php
//Checking Sum Zeror
//[-5,-4,-3,-2,0,2,4,6,8] input
//[?,?]
//[-4,4] //output

$arr = [-5,-4,-3,-2,0,2,4,6,8];// already sorted array
$sum =[];
$arrlen=count($arr);
for($i=0;$i<$arrlen;$i++)
{
    for($j=1;$j<$arrlen;$j++)
    {
        if($arr[$i]+$arr[$j]===0)
        {
            $sum =[$arr[$i],$arr[$j]];
            break;
        }
        else
        {
            $sum = "No Sum Element in Array";
        }
    }
}
print("this is value sum of zero <br>");
 print_r($sum);
?>