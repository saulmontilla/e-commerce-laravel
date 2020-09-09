<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoppingCart;
use App\Product;

class ShoppingCartController extends Controller
{

    private $cart;

    public function __construct(ShoppingCart $cart)
    {
        $this->cart = new $cart();
    }

    public function addProduct (Request $request)
    {
        $request->validate([
            'quantity' => 'required | numeric | min:1'
        ]);
        
        $product = Product::find($request->product_id);

        $quantity = $request->quantity;

        $product->{"quantity"} = $quantity;

        (new ShoppingCart)->addProduct($product);

        $message = 'Product added to cart';

        return redirect()->back()->with('n-success', $message);

    }

    public function index ()
    {
        $data = [
            'cart' => $this->cart->cart(),
            'count' => $this->cart->count()
        ];

        return view('cart', $data);
    }
}
