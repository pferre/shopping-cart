<?php

require_once 'src/CartInterface.php';
require_once 'src/Cart.php';
require_once 'src/Product.php';

$lemon = new Product('Lemon');
$tomato = new Product('Tomato');

$lemon->setPrice(0.50);
$tomato->setPrice(0.20);

$cart = new Cart();
$cart->addItem($lemon, 1);
$cart->addItem($tomato, 1);
$cart->getTotalSum();

