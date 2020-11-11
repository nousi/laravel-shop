<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stock;
use App\Models\cart;

class ShopController extends Controller
{
    public function index()
    {
        $stocks = Stock::Paginate(6);
        return view('shop', compact('stocks'));
    }
    public function myCart()
    {
        $my_carts = Cart::all();
        return view('mycarts', compact('my_carts'));
    }
}
