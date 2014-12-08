<?php


class DiscountHandler {
    /**
     * @var DiscountInterface
     */
    private $discountType;


    /**
     * @param DiscountInterface $discountType
     */
    function __construct(DiscountInterface $discountType)
    {
        $this->discountType = $discountType;
    }

    /**
     * @param $amount
     * @return bool|mixed
     */
    public function checkDiscountFor($amount)
    {
        try {
            $response = $this->discountType->getDiscountedPriceFrom($amount);
        } catch (InvalidArgumentException $e) {
            $response = false;
        }

        return $response;

    }
} 