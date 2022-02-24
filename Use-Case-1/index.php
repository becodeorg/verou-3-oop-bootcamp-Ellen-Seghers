<?php

//Create the variabele for banana's, apple's and bottles of wine
$numberBananas = 6;
$priceBananas = 1;
$numberApples = 3;
$priceApples = 1.5;
$numberBottlesOfWine = 2;
$priceBottleOfWine = 10;

//Calculate the total price
$netPriceBananas = $numberBananas * $priceBananas;
$netPriceApples = $numberApples * $priceApples;
$netPriceWine = $numberBottlesOfWine * $priceBottleOfWine;

$totalNet = $netPriceBananas + $netPriceApples + $netPriceWine;

//Calculate how much of the total price is tax
//(fruit goes at 6%, wine is 21%)
$fruitTax = 6/100;
$wineTax = 21/100;

$totalTax = $netPriceBananas * $fruitTax + $netPriceApples * $fruitTax + $netPriceWine * $wineTax;

?>
