<?php
// anagram is that strings two string have same length and same charecter and character position is not fix.
$str1 = "drama";
$str2 = "radam";
$len1 =strlen($str1);
$len2 =strlen($str2);
$flag =0;
if($len1 == $len2)
{
   for($i=0;$i<$len1;$i++)
   {
       //echo $str1[$i]."<br>";
       for($j=0;$j<$len2;$j++)
       {
           if($str1[$i]==$str2[$j])
           {
               //echo "hi"."<br>";
               $flag++;
           }
           
       }
   }
    if($flag == $len1)
    {
        echo " This is   Anagram  $str1 == $str2 ";
    }
    else
    {
        echo " This is Not  Anagram  $str1 != $str2 ";
    }
}
else
{
    echo " Not  Anagram  $str1 != $str2 ";
}

?>
