<?php

namespace Stock\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function lista()
    {
        $products = DB::select("SELECT * FROM products");

        //another way would be using magic methods
        //return view('listproducts')->withProducts($products);
//        return view('listproducts')->with('products', $products);
        return view('listproducts', ['products'=>$products]);
    }

}