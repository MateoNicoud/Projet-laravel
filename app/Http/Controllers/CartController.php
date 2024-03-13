<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductOption;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {


        $cart = $request->session()->get('cart');
        $viewedCart = [];
        foreach ($cart as $id => $qte) {
            $product = ProductOption::where('id', '=', $id)->first()->load('product', 'url_img');
            $product->qte = $qte;
            array_push($viewedCart, $product);

        }

        return view('cart', [
                'cart' => $viewedCart
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $cart = $request->session()->get(key: 'cart');

        $cart[$id] = (int)$request->input($id);
        $request->session()->put('cart', $cart);

//        dd($request->session()->get('cart'));
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $cart = $request->session()->get('cart');

        $idForDeleting = $request->input('product');
        unset($cart[$idForDeleting]);
        $request->session()->put('cart', $cart);
        dd($request);

        return back();

    }
}
