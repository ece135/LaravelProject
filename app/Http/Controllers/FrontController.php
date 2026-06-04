<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class FrontController extends Controller
{
    public function home()
{
    $categories = Category::where('parent_id', 0)->get();

    $recentProducts = Product::latest()->take(6)->get();

    return view('front.home', compact('categories', 'recentProducts'));
}
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

    public function productDetail($id)
{
    $product = Product::findOrFail($id);
    return view('product-detail', compact('product'));
}

    public function category($id)
{
    $category = Category::findOrFail($id);
    
    $subCategories = Category::where('parent_id', $id)->get();
    
    $subCategoryIds = $subCategories->pluck('id')->toArray();
    $allCategoryIds = array_merge([$id], $subCategoryIds);
    
    $products = Product::whereIn('category_id', $allCategoryIds)->get();
    
    return view('category', compact('category', 'products', 'subCategories'));
}
}