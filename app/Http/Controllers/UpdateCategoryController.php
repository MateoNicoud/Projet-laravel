<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UpdateCategoryController extends Controller
{

    public function index()
    {

        $products = Product::all();



        return view('updateCategoryView',
        [
            'products' => $products,
        ]);
    }


    public function update(Request $request)
    {

        $slug = Str::slug($request->name);



        Category::find($request->id)->update(
            [
                'name' => $request->name,
                'slug' => $slug
            ]
        );
        return redirect('/dashboard');
    }




}
