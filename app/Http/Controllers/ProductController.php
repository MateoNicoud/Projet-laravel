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

    public function index(string $slug, Request $request)
    {

        $id = Category::where('slug', '=', $slug)->get();
//        dd($request->all());
        $categoryProducts = Product::with('productOptions:id,price_ttc,product_id')->where('category_id', '=', $id[0]['id'])->get();
        $categoryName = Category::where('slug', '=', $slug)->get();



        foreach ($categoryProducts as $product) {
                $minimumPrices[$product->id] = $product->productOptions->min('price_ttc');
        }

        $nbreProduct = 0;
        if ($request->session()->get('cart')){
            $cart =  $request->session()->get('cart');
            foreach ($cart as $key => $product){
                $nbreProduct += $product;
            }
        }

        return view('catalog', [
            'categoryProducts' => $categoryProducts,
            'categoryName' => $categoryName[0],
            'minimumPrices' => $minimumPrices,
            'nbreProduct' => $nbreProduct
        ]);
    }


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


        $nbreProduct = 0;
        if ($request->session()->get('cart')){
            $cart =  $request->session()->get('cart');
            foreach ($cart as $key => $product){
                $nbreProduct += $product;
            }
        }




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
