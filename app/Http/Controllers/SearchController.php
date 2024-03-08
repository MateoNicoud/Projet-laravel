<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class SearchController extends Controller
{
    protected function getProducts(Request $search)
    {
         $products = null;

        $request = request('search');

        try {
            if (Product::where('id', $request)->first()) {
                $product = Product::where('id', $request)->get();
            } else if (Product::where('name', 'LIKE', '%' . $request . '%')->first()) {
                $product = Product::where('name', 'LIKE', '%' . $request . '%')->get();
            } else {
                $product = Product::where('description', 'LIKE', '%' . $request . '%')->get();
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
        if ($product) {
            dd($product);
            return redirect('/results');
        }
    }
}
