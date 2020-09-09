<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\ShoppingCart;

class CartNav extends Component
{
    private $cart;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(ShoppingCart $cart)
    {
        $this->cart = (new $cart);
    }

    public function filled ()
    {
        $quantity = $this->cart->count();
        if ($quantity > 0) return true;
        return false;
    }

    public function collection()
    {
        return (new ShoppingCart)->cart();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.cart-nav');
    }
}
