<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(8)->get();

        return view('landing-page')->with('products', $products);
    }

}
