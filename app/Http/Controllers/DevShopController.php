<?php namespace OpsGuru\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;

class DevShopController extends Controller
{
    public function index()
    {

        return view('shop');
    }
}
