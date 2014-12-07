<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Product;
use Prophecy\Argument;

class CartSpec extends ObjectBehavior
{
    function let(\Discount $discount)
    {
        $this->beConstructedWith($discount);
        $this->shouldHaveType('Cart');
    }

    /**
     * @param Product $lemon
     * @test
     */
    function it_adds_one_item_to_the_cart(Product $lemon)
    {
        $this->addItem($lemon, $amount = 1);

        $this->shouldHaveCount(1);
    }

    /**
     * @param Product $lemon
     * @param Product $tomato
     * @test
     */
    function it_adds_items_to_the_cart(Product $lemon, Product $tomato)
    {
        $this->addItem($lemon, $amount = 2);
        $this->addItem($tomato, $amount = 1);

        $this->shouldHaveCount(2);
    }

    /**
     * @param Product $lemon
     * @test
     */
    function it_returns_an_exception_when_an_item_amount_is_less_than_one(Product $lemon)
    {
        $this->shouldThrow('InvalidArgumentException')->duringAddItem($lemon, $amount = 0);
    }

    /**
     * @internal param Product $lemon
     * @test
     */
    function it_gets_the_price_of_a_product()
    {
        $product = new Product('Lemon');

        $product->setPrice(0.50);

        $this->getPriceOf($product)->shouldReturn(0.50);
    }


    /**
     * @test
     */
    function it_gets_total_output_in_the_shopping_cart()
    {
        $lemon = new Product('Lemon');
        $tomato = new Product('Tomato');

        $lemon->setPrice(0.50);
        $tomato->setPrice(0.20);

        $this->addItem($lemon, $amount = 2);
        $this->addItem($tomato, $amount = 2);

        //$this->applyDiscount()->shouldBeCalled();

        $this->getTotalSum()->shouldReturn([
            ['amount' => 2, 'name' => 'Lemon', 'price' => 1.00 ],
            ['amount' => 2, 'name' => 'Tomato', 'price' => 0.40]
        ]);
    }

}
