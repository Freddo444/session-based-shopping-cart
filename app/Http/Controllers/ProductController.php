<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = product::paginate(10);
        return view('index', compact('products'));
    }

    public function viewProducts($id){
        $product = product::find($id);
        return view('view', compact('product'));
    }
}
