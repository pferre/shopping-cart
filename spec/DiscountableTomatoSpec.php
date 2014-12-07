<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DiscountableTomatoSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('DiscountableTomato');
    }

    function it_returns_discounted_price_for_amounts_between_21_and_100()
    {
        $range = $this->getNumberBetween($start = 21, $end = 100);

        $this->getDiscountedPriceFrom($amount = $range)->shouldReturn(0.18);
    }

    function it_returns_discounted_price_for_amounts_101_or_more()
    {
        $this->getDiscountedPriceFrom($amount = 101)->shouldReturn(0.14);
    }

    /**
     * @param $start
     * @param $end
     * @return array
     */
    private function getNumberBetween($start, $end)
    {
        $range = range($start, $end);

        foreach ($range as $number)
        {
            return $number;
        }
    }
}
