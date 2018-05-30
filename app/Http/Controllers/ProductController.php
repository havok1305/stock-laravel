<?php

namespace Stock\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
class ProductController extends Controller
{
    public function list()
    {
        $products = DB::select("SELECT * FROM products");

        //another way would be using magic methods
        //return view('listproducts')->withProducts($products);
//        return view('listproducts')->with('products', $products);
        return view('product.listproducts', ['products'=>$products]);
    }

    /*public function show()
    {
//        $id = Request::input('id', 0);
        $id = Request::route('id');
        $product = DB::select("SELECT * FROM products WHERE id = ?", [$id]);
        if(empty($product)) {
            return "Product doesn't exists!";
        }
        return view('details', ['product'=>$product[0]]);
    }*/

    //passing the id as a parameter is another way of getting a route parameter without using the Request class
    public function show($id)
    {
        $product = DB::select("SELECT * FROM products WHERE id = ?", [$id]);
        if(empty($product)) {
            return "Product doesn't exists!";
        }
        return view('product.details', ['product'=>$product[0]]);
    }
}