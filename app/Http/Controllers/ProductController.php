<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Product;
use App\Models\ProductOption;


class ProductController extends Controller
{

    public function index(Request $request)
    {
        $slug = $request->slug;
        $categories = \App\Models\Category::all();

        $i=0;
while($i < 10) {
    if ($categories[$i]->slug == $slug) {

    $numbercategory = $i;
}
    $i++;
}
//dd($request);

        $category = Category::where('slug', '=', $request->slug)->first()->load('products', 'products.productOptions');

        foreach ($category->products as $product) {

                $minimumPrices[$product->id] = $product->productOptions->min('price_ttc');
        }

        $nbreProduct = 0;
        if ($request->session()->get('cart')){
            $cart =  $request->session()->get('cart');
            foreach ($cart as $product){
                $nbreProduct += $product;
            }
        }

        return view('catalog', [

            'categoryProducts' => $category->products,
            'categoryName' => $category->name,
            'minimumPrices' => $minimumPrices,
            'nbreProduct' => $nbreProduct,
            'slug' => $slug,
            'numbercategory' => $numbercategory
        ]);
    }



    public function show(Request $request): view
    {


        $product = Product::where('id', '=', $request->id)->get()[0];


        $productOptions= (empty($product->productOptions))?'null': $product->productOptions;


        $productCategory= (empty($product->category))?'null': $product->category;
        $productComments= (empty($product->comments))?'null': $product->comments;
        $productImg= (empty($productOptions[0]->url_img))?'null': $productOptions[0]->url_img;
//        dd($product->name);

        $nbreProduct = 0;
        if ($request->session()->get('cart')){
            $cart =  $request->session()->get('cart');
            foreach ($cart as $key => $cartProduct){
                $nbreProduct += $cartProduct;
            }
        }
//        dd($product);

//        dd($productImg->main_img);


        return view('Product.show', [
            'product' => $product,
            'productOptions' => $productOptions,
            'productCategory' => $productCategory,
            'productComments' => $productComments,
            'productImg' => $productImg,
            'nbreProduct' => $nbreProduct
        ]);
    }
}
