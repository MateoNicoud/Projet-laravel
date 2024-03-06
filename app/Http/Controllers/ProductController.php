<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function show(string $id): view
    {
        $product = Product::find($id);
        $productOptions= (empty($product->productOptions))?'null': $product->productOptions;
        $productCategory= (empty($product->category))?'null': $product->category;
        $productComments= (empty($product->comments))?'null': $product->comments;

        return view('Product.show', [
            'product' => $product,
            'productOptions'=> $productOptions,
            'productCategory'=>$productCategory,
            'productComments'=>$productComments,

        ]);
    }
}
