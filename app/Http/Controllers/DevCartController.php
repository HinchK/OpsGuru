<?php namespace OpsGuru\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;

class DevCartController extends Controller
{
    public function index()
    {
        Cart::add('192ao12', 'Product 1', 1, 9.99);
        Cart::add('1239ad0', 'Product 2', 2, 5.95, ['size' => 'large']);

        $cart = Cart::content();

        return view('cart', compact('cart'));
    }
}
