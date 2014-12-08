[![Build Status](https://travis-ci.org/pferre/shopping-cart.svg?branch=master)](https://travis-ci.org/pferre/shopping-cart)

#### Run the unit tests
```
bin/phpspec run --format=pretty
```
#### Run the app
```
php index.php
```
#### Checking the discount tiers
Resolving a discountable tier for a particular product:
```
$DiscountableProduct = str_replace($name, 'Discountable'.$name, $name);
$handler = new DiscountHandler(new $DiscountableProduct);
$discount = $handler->checkDiscountFor($amount = 80);
```
#### Limitations and todo
Format output properly to the console.

Resolve the discount tier implementations properly with polymorphic behaviour. There's a basic implementation of this using the Strategy design pattern. 
