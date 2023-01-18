<?php
$arr = [10,20,45,100,65,15,80];
$count = count($arr);
$max=$arr[0];
//$min = $arr[0];
for($i=0;$i<$count;$i++)
{
    
    //echo $arr[$i].",";
    // 
    
   if ($max<$arr[$i])
       //if ($min>$arr[$i])
    {
        $max = $arr[$i];
        //$min = $arr[$i];
    }
    
}
echo " find maximum number in array : $max";
 //echo" find maximum number in array :".$min;
?>
