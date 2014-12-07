<?php


class DiscountableLemon implements DiscountInterface {

    /**
     * @param $amount
     * @return mixed
     */
    public function getDiscountedPriceFrom($amount)
    {
        if ($amount < 11)
        {
            throw new InvalidArgumentException('Sorry, no discount available for that amount');
        }

        return (double) 0.45;
    }
}