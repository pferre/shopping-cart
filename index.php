<?php

require 'vendor/autoload.php';

$tomato = new Product('Tomato');
$tomato->setPrice(0.50);
$cart = new Cart();
$cart->addItem($tomato, 23);
echo $cart->getPriceOf($tomato);
$summary = $cart->getTotalSum();

print_r($summary);

$name = $tomato->getName();
$DiscountableProduct = str_replace($name, 'Discountable'.$name, $name);

$discountHandler = new DiscountHandler(new $DiscountableProduct);
$discount = $discountHandler->checkDiscountFor($amount = 9);

if ( !$discount ) {
    $tomato->setPrice(0.50);
    var_dump('Non discounted price for ' . $tomato->getName() .' is '. $tomato->getPrice());
    exit;
}

var_dump('Is a '.$DiscountableProduct);
$tomato->setPrice($discount);
var_dump('Price for tomato is '.$tomato->getPrice());

