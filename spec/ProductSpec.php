<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProductSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith($name = 'Lemon');
        $this->shouldHaveType('Product');
    }

    /**
     * @test
     */
    function it_should_have_a_price()
    {
        $this->setPrice(0.5);

        $this->getPrice()->shouldBe(0.5);
    }

    /**
     * @test
     */
    function it_should_have_a_name()
    {
        $this->getName()->shouldBe('Lemon');
    }

    /**
     * @test
     */
    function it_should_have_an_amount()
    {
        $this->setAmount(5);

        $this->getAmount()->shouldBe(5);
    }

    /**
     * @test
     */
    function it_calculates_total_price()
    {
        $this->setAmount(5);

        $this->setPrice(0.5);

        $this->calculateTotalPrice()->shouldBe(2.50);
    }

}
