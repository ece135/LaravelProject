<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Str;
class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        
        if(empty($cart)) {
            return redirect()->route('shop')->with('error', 'Your cart is empty.');
        }

        $total = 0;
        foreach($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('front.checkout', compact('cart', 'total'));
    }

    public function process(Request $request)
    {
        $cart = session()->get('cart', []);
        
        if(empty($cart)) {
            return redirect()->route('shop');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'city' => 'required|string|max:100',
            'address' => 'required|string',

            'card_name'    => 'required|string|max:255',
            'card_number'  => 'required|string|min:16|max:19',
            'card_expiry'  => 'required|string|max:5',
            'card_cvv'     => 'required|string|min:3|max:3',
        ]);

        $total = 0;
        foreach($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        $order = new Order();
        $order->user_id = auth()->id(); 
        $order->invoice_no = '#ORD-' . strtoupper(Str::random(6)); 
        $order->total_amount = $total;
        $order->status = 'pending';
        
        
        $order->name  = $request->name;
        $order->email = auth()->user()->email; 
        $order->phone = $request->phone;
        $order->address = $request->address ; 
        
        $order->save();

        session()->forget('cart');

        return redirect()->route('profile.orders')->with('success', 'Thank you! Your order (' . $order->invoice_no . ') has been placed successfully.');
    }
}