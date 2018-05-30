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

    public function listJson()
    {
        $products = DB::select("SELECT * FROM products");

        return $products;
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

    public function addform()
    {

        return view('product.form');
    }
    public function add()
    {
        $inputs = Request::all();
        $name = $inputs['name'];
        $value = $inputs['value'];
        $unit = $inputs['unit'];

        $inserted = DB::insert('insert into products (`name`, `value`, unit) values (? , ?, ?)', [$name, $value, $unit]);

//        return implode(',',[$name, $value, $unit]);
//        return view('product.added', ['inserted'=>$inserted])->with('name', $name);
//        return redirect('/products')->withInput(['inserted'=>$inserted, 'name'=>$name]);
        return redirect()->action('ProductController@list')->withInput(['inserted'=>$inserted, 'name'=>$name]);
    }
}