<?php
// string sorting drama => aadmr
$str1 = "drama";
$len1 =strlen($str1);
$temp = "";
for($i=0;$i<$len1;$i++)
{
    for($j=$i+1;$j<$len1;$j++)
    {
        if($str1[$i]>$str1[$j])
        {
            $temp =$str1[$i];
            $str1[$i] =$str1[$j];
            $str1[$j] =$temp;
        }
    }
    echo $str1[$i];  
}



?>