<?php 
$rawPrice = 10;
$vatToPay = ($rawPrice / 100) * 15;
$total = $rawPrice + $vatToPay;

echo "Vat to needed to be paid is:" .$vatToPay;
echo "Total amount needed to be paid:" .$total;

?>