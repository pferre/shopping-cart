<?php


interface DiscountInterface {

    /**
     * @param $amount
     * @return mixed
     */
    public function getDiscountedPriceFrom($amount);
} 