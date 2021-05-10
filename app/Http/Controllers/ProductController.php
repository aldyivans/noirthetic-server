<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        //get data from table products
        $products = Product::latest()->get();

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'List Product',
            'data'    => $products
        ], 200);

    }
}
