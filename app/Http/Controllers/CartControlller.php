<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartControlller extends Controller
{
    public function addCart(Request $request, $id){
        $request->validate([
            'quantity'=>'required|integer|min:1'
        ]);

        $cart= session()->get('cart',[]);
            if(isset($cart[$id])){
                $cart[$id]['quantity']+=$request->quantity;
            }else{
                $cart[$id]=[
                    "name"=>$request->name,
                    "quantity"=>$request->quantity,
                    "price"=>$request->price,
                    "image"=>$request->image
                ];
            }
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully');

            }
    }

