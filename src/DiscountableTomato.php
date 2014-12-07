<?php


class DiscountableTomato implements DiscountInterface {

    /**
     * @param $amount
     * @return mixed
     */
    public function getDiscountedPriceFrom($amount)
    {
        if ( $amount > 20 && $amount <= 100 )
        {
            return (double) 0.18;
        }
        elseif ( $amount > 100 )
        {
            return (double) 0.14;
        }

        throw new InvalidArgumentException('Sorry, no discount available for that amount');
    }
}