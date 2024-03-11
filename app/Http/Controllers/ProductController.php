<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Product;
use App\Models\ProductOption;


class ProductController extends Controller
{
    //
    public function show(Request $request, string $id): view
    {

        // $idtest = 9b7fddae-bb74-4b84-b226-f3f69cd4f454

        $value = $request->session()->get('test');
        echo $value;
        $product = Product::find($id);
        $productOptions= (empty($product->productOptions))?'null': $product->productOptions;
        $productCategory= (empty($product->category))?'null': $product->category;
        $productComments= (empty($product->comments))?'null': $product->comments;
        $productImg= (empty($productOptions[0]->url_img))?'null': $productOptions[0]->url_img;




        return view('Product.show', [
            'product' => $product,
            'productOptions'=> $productOptions,
            'productCategory'=>$productCategory,
            'productComments'=>$productComments,
            'productImg'=>$productImg

        ]);
    }
}
