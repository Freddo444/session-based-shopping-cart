<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Events\ProductAddedToCart;
use App\Events\ProductUpdatedInCart;
use App\Events\ProductRemovedFromCart;

class CartController extends Controller
{
    public function addCart(Request $request, $id)
    {
        $validated = $request->validate([
            'product_name' => 'required|string|max:255',
            'product_price' => 'required|numeric',
            'product_image' => 'required|url',
            'currency' => 'required|string|max:10',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $validated['quantity'];
        } else {
            $cart[$id] = [
                'id' => $id,
                'product_name' => $validated['product_name'],
                'quantity' => $validated['quantity'],
                'product_price' => $validated['product_price'],
                'product_image' => $validated['product_image'],
                'currency' => $validated['currency'],
            ];
        }

        Session::put('cart', $cart);

        // Optional: Fire event
        // event(new ProductAddedToCart($id, $validated['quantity']));

        return redirect()->back()->with('success', 'Product added to cart successfully.');
    }

    public function updateCart(Request $request, $id)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1|max:99',
        ]);

        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $validated['quantity'];
            Session::put('cart', $cart);

            // Optional: Fire event
            // event(new ProductUpdatedInCart($id, $validated['quantity']));

            return redirect()->back()->with('success', 'Cart updated successfully.');
        }

        return redirect()->back()->with('error', 'Product not found in cart.');
    }

    public function deleteCart(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|integer',
        ]);

        $cart = Session::get('cart', []);
        $id = $validated['product_id'];

        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart);

            // Optional: Fire event
            // event(new ProductRemovedFromCart($id));
        }

        return redirect()->back()->with('success', 'Product removed from cart successfully.');
    }
}
