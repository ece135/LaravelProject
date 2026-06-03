<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontController extends Controller
{
    public function shop()
    {
        $products = Product::all();
        return view('shop', compact('products'));
    }

    public function about()
{
   
    return view('about');
}

    public function contact()
{
   
    return view('contact');
}

    public function cart()
{
    $cartProducts = Product::latest()->take(3)->get();
    return view('cart', compact('cartProducts'));
    
}

    public function wishlist()
{
    $wishlistProducts = Product::latest()->take(3)->get();
    return view('wishlist', compact('wishlistProducts'));
}
}