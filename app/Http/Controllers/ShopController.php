<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->take(15)->get();

        return view('shop')->with('products', $products);
    }
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $randomProducts = Product::where('slug', '!=',$slug)->randomProducts()->get();

        return view('product')->with('product')->with([
            'product' => $product,
            'randomProducts' => $randomProducts
        ]);
    }
}
