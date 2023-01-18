<?php
// string reverse without using strrev() function
//$str="HELLO", $revstr= strrev($str); string reverse function out put OLLEH
//string reverse and string palindrome below program
$str = "vinod";
$rev ="";                            
$length = strlen($str);
for($i=$length-1;$i>=0;$i--)
{
    $rev.= $str[$i];
}
if($str===$rev)
   echo " $str palinddrome string <br>";
else
{
    echo "$str is not palindrome string <br>";
}
echo $rev;// string reverse output

?>