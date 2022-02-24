<?php

/**
 * Defines a class Item which has a number of items, price and a tax rate.
 * Class allows calculation of the net price, tax price and total price.
 */
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

/**
 * Defines a class Fruit which has everything of class Item and is defined as an item with 6% tax rate.
 */
class Fruit extends Item {
    public function __construct($number, $price)
    {
        parent::__construct($number, $price, 6/100);
    }
}

/**
 * Defines a class Wine which has everything of class Item and is defined as an item with 21% tax rate.
 */
class Wine extends Item {
    public function __construct($number, $price)
    {
        parent::__construct($number, $price, 21/100);
    }
}

//Creating 3 objects: 2 fruits and a wine object.
$bananas = new Fruit(6,1);
$apples = new Fruit(3, 1.5);
$wineBottles = new Wine(2, 10);

//Calculates the total amount of taxes.
$totalTax = $bananas->getTaxPrice() + $apples->getTaxPrice() + $wineBottles->getTaxPrice();
//Calculates the total price including taxes.
$totalPrice = $bananas->getTotalPrice() + $apples->getTotalPrice() + $wineBottles->getTotalPrice();

?>