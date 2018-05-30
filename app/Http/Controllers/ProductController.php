<?php

namespace Stock\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function lista()
    {
        $products = DB::select("SELECT * FROM products");
        $html = "<h1>Listing some products</h1>";
        $html .= "<ul>";
        foreach($products as $product) {
            $html .= "<li> Name: ".$product->name;
            $html .= " Value: ".$product->value;
            $html .= " Unit: ".$product->unit;
            $html .= "</li>";
        }
        $html .= "</ul>";
        return $html;
    }

}