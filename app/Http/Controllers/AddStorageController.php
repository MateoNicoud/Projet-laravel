<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddStorage;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductOption;
use App\Models\Vat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AddStorageController extends Controller
{
    public function index(Request $request){



        if (!Gate::allows('addStorage')){
            return redirect('/dashboard');
        }

        $categories = Category::all();
        $vats = Vat::all();

        return view('/addStorage', ['categories' => $categories, 'vats' => $vats, 'user' => $request->user()]);

    }

    public function store(AddStorageRequest $request){




        if (!Gate::allows('addStorage')){
            return redirect('/dashboard');
        }

        $vats = Vat::all();

        $slug = str_replace(' ', '-', $request->name);
        $reference = 'product-'.uniqid();


        foreach ($vats as $vat){
            if ($vat->id == $request->vat){
                $price_ht = $request->price_ttc/(1+($vat->vat/100));
            }
        }

        $price_vat = $request->price_ttc-$price_ht;


        $product = Product::create(
            [
                'name' => $request->name,
                'description' => $request->description,
                'reference' => $reference,
                'slug' => $slug,
                'brand' => $request->brand,
                'category_id' => $request->category
            ]);


        ProductOption::create(
            [
                'product_id' => $product->id,
                'vat_id' => $request->vat,
                'url_img_id' => '9b8d7dcd-2faa-4b49-b5bb-b506ef675f84',
                'option' => $request->option,
                'price_ht' => $price_ht,
                'price_ttc' => $request->price_ttc,
                'price_vat' => $price_vat,
                'weight' => $request->weight,
                'stock' => $request->stock
            ]);

        return redirect('/dashboard');

    }
}
