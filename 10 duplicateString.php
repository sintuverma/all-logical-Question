<?php
//(10) find duplicate characters in the string.
$str = "ssoodd";
$strlen = strlen($str);
$temp ="";
$count = 0;
//echo $strlen; // print the length of string
for($i=0;$i<$strlen;$i++)
{
    for($j=$i+1;$j<$strlen;$j++)
        if($str[$i]==$str[$j])
        {
            $temp.=$str[$i];// this will be find the  duplicate characters list in string
            $count++;// this will be count duplicate characters in string
            
        }
       
}
echo " duplicate characters in the string :=> ".$temp."<br>"; 
echo " duplicate  numbers of characters in the string:=> ".$count;

?>