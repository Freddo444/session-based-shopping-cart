<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartControlller extends Controller
{
    public function addCart(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_price' => 'required|numeric',
            'product_image' => 'required|url',
            'currency' => 'required|string|max:10',
            'quantity' => 'required|integer|min:1'
        ]);

        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $request->quantity;
        } else {
            $cart[$id] = [
                "product_name" => $request->name,
                "quantity" => $request->quantity,
                "product_price" => $request->price,
                "product_image" => $request->image,
                "currency" => $request->currency
            ];
        }
        dd($cart);
        // dd(session()->put('cart', $cart));
        return redirect()->back()->with('success', 'Product added to cart successfully');
    }
}
