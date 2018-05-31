<?php

namespace Stock\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Stock\Product;
use Stock\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function __construct()
    {
//        $this->middleware('myauth');
        //protect only some endpoints with authentication
        $this->middleware('myauth', ['only'=>['addform', 'delete']]);
    }

    public function list()
    {
        $products = Product::all();

        //another way would be using magic methods
        //return view('listproducts')->withProducts($products);
//        return view('listproducts')->with('products', $products);
        return view('product.listproducts', ['products'=>$products]);
    }

    public function listJson()
    {
        $products = Product::all();

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
//        $product = DB::select("SELECT * FROM products WHERE id = ?", [$id]);
        $product = Product::find($id);
        if(empty($product)) {
            return "Product doesn't exists!";
        }

        return view('product.form', ['product'=>$product]);
    }

    public function addform()
    {
        $product = new Product();
        return view('product.form', ['product'=>$product]);
    }
    public function add(ProductRequest $request)
    {

        /*$inputs = Request::all();
        $name = $inputs['name'];
        $value = $inputs['value'];
        $unit = $inputs['unit'];

        $inserted = DB::insert('insert into products (`name`, `value`, unit) values (? , ?, ?)', [$name, $value, $unit]);*/

//        $product = new Product();
//        $product->name = $inputs['name'];
//        $product->value = $inputs['value'];
//        $product->unit = $inputs['unit'];

//        $inputs = Request::all();
//
//        $product = new Product($inputs);
//        $inserted = $product->save();

        //validating without a custom request class
//        Request::validate([
//            'name'=>'required|unique'
//        ]);

        $product = Product::create($request->validated());

        $inserted = !empty($product->id);
//        return implode(',',[$name, $value, $unit]);
//        return view('product.added', ['inserted'=>$inserted])->with('name', $name);
//        return redirect('/products')->withInput(['inserted'=>$inserted, 'name'=>$name]);
        return redirect()
            ->action('ProductController@list')
            ->withInput([
                'inserted'=>$inserted,
                'name'=>Request::input('name')
            ]);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->action('ProductController@list');
    }

    public function update(ProductRequest $request)
    {
        $id = $request->route('id');
        $product = Product::find($id);
        $product->name = Request::input('name');
        $product->value = Request::input('value');
        $product->unit = Request::input('unit');
        $product->save();
        return redirect()->action('ProductController@list');
    }

    public function formmodel($id)
    {
        return view('product.formmodel', ['product'=>Product::find($id)]);
    }
}