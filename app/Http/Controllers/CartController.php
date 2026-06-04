<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
     
        $total = 0;
        foreach($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('front.cart', compact('cart', 'total'));
    }

    public function add($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } 
        else {
            $cart[$id] = [
                "name" => $product->title, 
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image 
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to your cart!');
    }

    public function remove($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            unset($cart[$id]); 
            session()->put('cart', $cart); 
        }

        return redirect()->back()->with('success', 'Product removed from cart.');
    }
}
