<?php

class Item {
    private $number;
    private $price;
    private $tax;

    public function __construct($number, $price, $tax)
    {
        $this->number = $number;
        $this->price = $price;
        $this->tax = $tax;
    }

    public function getNetPrice ()
    {
        return $this->number * $this->price;
    }

    public function getTaxPrice()
    {
        $netPrice = $this->getNetPrice();
        return $netPrice * $this->tax;
    }

    public function getTotalPrice ()
    {
        $netPrice = $this->getNetPrice();
        $taxPrice = $this->getTaxPrice();
        return $netPrice + $taxPrice;
    }
}

class Fruit extends Item {
    public function __construct($number, $price)
    {
        parent::__construct($number, $price, 6/100);
    }
}

class Wine extends Item {
    public function __construct($number, $price)
    {
        parent::__construct($number, $price, 21/100);
    }
}

$bananas = new Fruit(6,1);
$apples = new Fruit(3, 1.5);
$wineBottles = new Wine(2, 10);

$totalTax = $bananas->getTaxPrice() + $apples->getTaxPrice() + $wineBottles->getTaxPrice();
$totalPrice = $bananas->getTotalPrice() + $apples->getTotalPrice() + $wineBottles->getTotalPrice();

?>