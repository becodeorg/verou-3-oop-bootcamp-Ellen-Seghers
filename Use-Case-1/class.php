<?php

class Basket {
    //Create the variabele for banana's, apple's and bottles of wine
    public $numberBananas = 6;
    public $priceBananas = 1;
    public $numberApples = 3;
    public $priceApples = 1.5;
    public $numberBottlesOfWine = 2;
    public $priceBottleOfWine = 10;

    //Calculate the total price
    public function __construct ($numberBananas, $priceBananas, $numberApples, $priceApples, $numberBottlesOfWine, $priceBottleOfWine)
    {
        $this->numberBananas = $numberBananas;
        $this->numberApples = $numberApples;
        $this->numberBottlesOfWine = $numberBottlesOfWine;
        $this->priceBananas = $priceBananas;
        $this->priceApples = $priceApples;
        $this->priceBottleOfWine = $priceBottleOfWine;
    }


}
//$netPriceBananas = $numberBananas * $priceBananas;
//$netPriceApples = $numberApples * $priceApples;
//$netPriceWine = $numberBottlesOfWine * $priceBottleOfWine;
//
//$totalNet = $netPriceBananas + $netPriceApples + $netPriceWine;



?>