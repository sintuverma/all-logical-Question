<?php
// find duplicate character in string
    $str = "amitiee";
    $lens= strlen($str);
    $dups="";
    for($i = 0; $i<$lens;$i++)
    {
        for($j =$i+1; $j<$lens;$j++)
        {
            if($str[$i]==$str[$j])
            {
                $dups.= $str[$j];
            }
                
        }
    }
   echo $dups;
?>