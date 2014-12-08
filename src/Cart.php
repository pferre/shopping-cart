<?php


class Cart implements CartInterface, Countable {

    /**
     * @var array
     */
    private $collection;


    /**
     * Display a summary of the shopping cart
     * @return string
     */
    public function getTotalSum()
    {
        foreach ($this->collection as $product)
        {
            $products[] = $product->displayAttributes();
        }

        return $products;
    }

    /**
     * Add an item to the shopping cart
     *
     * @param Product $product Instance of the Product we're adding
     * @param int $amount The amount of $product
     *
     * @return void
     */
    public function addItem(Product $product, $amount)
    {
        if ( $amount < 1 )
        {
            throw new InvalidArgumentException;
        }

        $product->setAmount($amount);

        $this->collection[] = $product;
    }

    /**
     * Get the price of the product depending on how many are already in the shopping cart
     *
     * @param Product $product Product The product to determine price for
     * @return float The price of $product
     */
    public function getPriceOf(Product $product)
    {
        return (float) $product->getPrice();
    }

    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * The return value is cast to an integer.
     */
    public function count()
    {
        return count($this->collection);
    }

}