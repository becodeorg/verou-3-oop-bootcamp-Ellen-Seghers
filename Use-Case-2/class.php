<?php

/**
 * Defines a class Item which has a number of items, price and a tax rate.
 * Class allows calculation of the net price, tax price and total price.
 * Class allows setting discounts.
 */
class Item {
    private $number;
    private $price;
    private $tax;
    private $discount;

    public function __construct($number, $price, $tax)
    {
        $this->number = $number;
        $this->price = $price;
        $this->tax = $tax;
        $this->discount = 0;
    }

    public function getNetPrice ()
    {
        return $this->number * $this->price * (100 / 100 - $this->discount);
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

    public function setDiscount ($discount)
    {
        $this->discount = $discount;
    }
}

/**
 * Defines a class Fruit which has everything of class Item and is defined as an item with 6% tax rate.
 * Set a 50% discount for all fruits.
 */
class Fruit extends Item {
    public function __construct($number, $price)
    {
        parent::__construct($number, $price, 6/100);
        parent::setDiscount(50 / 100);
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