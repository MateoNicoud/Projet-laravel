<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    protected function getProducts(Request $search)
    {
        $products = Product::get();

//dd(request('search'));
        if(request('search')){
            $products=$products
                ->where(['name', 'description'],'LIKE','%'.$search.'%');
dd($products,$search);
        }

        return $products->get('name');
    }
}
