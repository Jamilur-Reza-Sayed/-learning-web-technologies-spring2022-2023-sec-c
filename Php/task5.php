<?php
$num = 15;
if($num>100 || $num<11){echo "The input number is not valid";}
else{
while ( $num <= 100 ) {
  print "$num" . "\r\n";
  $num += 2;
}
}
 
?>