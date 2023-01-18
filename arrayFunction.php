<?php
  echo " <h3> 1) using array_chunk method</h3> <br>";
  $my_arr = ["a","b","c","d","e","f"];
  echo "<pre>";
  print_r(array_chunk($my_arr,2));
  echo "</pre>";
  //echo 1+2+"D4";// show the error
  echo " <h3> 2) var_count_values method <h3> <br>";

  $my_arr2= ["a","b","c","d","a","b"];
  print_r(array_count_values($my_arr2));// this function count the duplicate value of array ex:-> Array ( [a] => 2 [b] => 2 [c] => 1 [d] => 1 ) 
  
  echo "<h3> 3) array_combine method  </h3><br>";
  $ar1 =["orange","mango","papaya","anar"];
  $ar2 =[1,2,3,4];
  print_r(array_combine($ar1,$ar2));// this function take same length array otherwise this will show the error. this create first array as a key and second array as a value. ex:-> Array ( [orange] => 1 [mango] => 2 [papaya] => 3 [anar] => 4 ) 

  echo "<h3> 4) array_combine method  </h3><br>";
  print_r(array_merge($ar1,$ar2));// this is merge two arrays only array1 values and array2 values. Array ( [0] => orange [1] => mango [2] => papaya [3] => anar [4] => 1 [5] => 2 [6] => 3 [7] => 4 ) 
  
  echo "<h3> 5) extract method </h3>";
  
$assoc = ["a"=>"anar","b"=>"bale","c"=>"chukandar","d"=>"dragon fruite"];
extract($assoc); // this function make keys of arrays  variable you can see in bellow example
echo $a." , ".$b." , ".$c." , ".$d;

$str = [1,2,3,4,5] ;
 echo sizeof($str);//  count total elements in array
 echo count($str);//   count total elements in arrays


?>