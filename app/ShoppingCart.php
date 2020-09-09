<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ShoppingCart extends Model
{
    private $cart;

    public function __construct ()
    {
        if (session()->has('shopping_cart'))
        {
            session('shopping_cart');
        }
        else
        {
            session(['shopping_cart' => array()]);
        }
    }

    public function addProduct (Product $product)
    {
        //session()->flush();
        if (session()->has('shopping_cart.' . $product->id))
        {
            $current_product = session('shopping_cart.' . $product->id);
            $current_quantity = $current_product->quantity;
            $aditional_quantity = $product->quantity;
            $updated_quantity = $current_quantity + $aditional_quantity;
            $current_product->quantity = $updated_quantity;

            session([
                'shopping_cart.' . 
                $product->id => $current_product
            ]);
        }
        else 
        {
            session([
                'shopping_cart.' . 
                $product->id => $product
            ]);
            
        }
               
        return $this;
    }

    public function count()
    {
        $count = 0;
        $cart = session('shopping_cart');

        foreach($cart as $product)
        {
            $count += $product['quantity'];
        }

        return $count;
    }

    public function cart()
    {
        return session('shopping_cart');
    }
}
