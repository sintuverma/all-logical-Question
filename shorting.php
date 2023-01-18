<?php
//shorting 1,2,3,4,5,6,7
$arr = [6,7,5,2,4,3,1];
$arrlen = count($arr);
$temp=0;
$i=0;
$j=0;
for($i=0; $i<=$arrlen-1;$i++)
{
    for($j = $i+1; $j<=$arrlen-1;$j++)
    {
        if($arr[$i] > $arr[$j])
        {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
    echo $arr[$i]." , ";
}
?>