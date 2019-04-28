<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index()
    {
        return view('products');
    }

    public function search(Request $request)
    {

        $results = Product::where('name', 'like', '%' . $request->query('query') . '%')->get();

        return response()->json($results);
    }

    public function get()
    {

        $products = Product::all();

        return response()->json($products);
    }
}
