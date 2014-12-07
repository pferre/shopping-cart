<?php


class Product {

    private $name;

    private $price;

    private $amount;

    /**
     * @param $name
     */
    function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function displayAttributes()
    {
        $attributes = [
            'amount'    => $this->getAmount(),
            'name'      => $this->getName(),
            'price'     => $this->calculateTotalPrice()
        ];

        return $attributes;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function calculateTotalPrice()
    {
        return $this->price * $this->amount;
    }

}