<?php

$num = 956378;  
$sum=0; 
$rem=0;  

while($num > 0)  
 {  
  $rem=$num%10;  
   $sum = $sum + $rem;  
   $num=$num/10;  
  }  

 echo "Sum of digits 956378 is $sum";

?>