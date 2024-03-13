<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductOption;
use App\Models\Vat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UpdateProductController extends Controller
{
    public function index(Request $request)
    {


        $product = Product::where('id','=',$request->id)->get();
        $vats = Vat::all();



        return view('updateProductView',
            [
                'product' => $product,
                'vats' => $vats,
            ]);
    }

    public function update(UpdateProductRequest $request){


        $slug = Str::slug($request->name);
        $reference = 'product-'.uniqid();

        Product::find($request->input('id'))->update(
            [
                'name' => $request->name,
                'description' => $request->description,
                'reference' => $reference,
                'slug' => $slug,
                'brand' => $request->brand,
                'category_id' => $request->category
            ]);



        return redirect('/updateProduct');

    }


    public function putOnCookie(Request $request)
    {
        $products = Product::all();
        return view('selectProductToUpdate',
            ['products' => $products,
            ]);

    }


}
