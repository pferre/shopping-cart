<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DiscountableLemonSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('DiscountableLemon');
    }

    /**
     * @test
     */
    function it_should_return_discounted_price_for_ten_or_more()
    {
        $this->getDiscountedPriceFrom($amount = 11)->shouldReturn(0.45);
    }
}
