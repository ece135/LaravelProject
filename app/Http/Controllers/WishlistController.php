<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = session()->get('wishlist', []);
        return view('front.wishlist', compact('wishlist'));
    }

  
    public function toggle($id)
    {
        $product = Product::findOrFail($id);
        $wishlist = session()->get('wishlist', []);

      
        if(isset($wishlist[$id])) {
            unset($wishlist[$id]);
            $message = 'Product removed from your wishlist.';
        } 
    
        else {
            $wishlist[$id] = [
                "name" => $product->title, 
                "price" => $product->price,
                "image" => $product->image
            ];
            $message = 'Product added to your wishlist!';
        }

        session()->put('wishlist', $wishlist);

        return redirect()->back()->with('success', $message);
    }
}
