<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartControlller extends Controller
{
    public function addCart(Request $request, $id)
    {
        $test =  $request->validate([
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
                'id' => $id,
                "product_name" => $request->name,
                "quantity" => $request->quantity,
                "product_price" => $request->price,
                "product_image" => $request->image,
                "currency" => $request->currency
            ];
        }
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully');
    }


    // public function deleteCart(Request $request)
    // {
    //     $productId = $request->validate([
    //         'product_id' => 'required|integer|exists:products,id'
    //     ]);

    //     $cart = session()->get('cart', []);

    //     if (isset($cart[$productId['product_id']])) {
    //         unset($cart[$productId['product_id']]);
    //         session()->put('cart', $cart);
    //     }

    //     return redirect()->back()->with('success', 'Product removed from cart successfully');
    // }


    public function deleteCart(Request $request)
    {

        $productId =  $request->validate([
            'product_id' => 'required|integer|exists:products,id'
        ]);
        $cart = session()->get('cart', []);

        if (isset($cart[$productId['product_id']])) {
            unset($cart[$request->product_id]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', 'Product removed from cart successfully');
    }
}
