<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddProductController extends Controller
{

    public function addCart(Request $request, string $id){

        $type_request = $request->input('btn_order') ? $request->input('btn_order') : $request->input('btn_cart');

        $qte = $request->input('qte_product');

        if (!$request->session()->get('cart')){
            $cart = $request->session()->get('cart',[]);
            $cart[$id] = (int)$qte;
            $request->session()->put('cart', $cart);

        }else{
            $cart = $request->session()->get('cart',[]);
            $request->session()->put('cart', $cart);
            if(array_key_exists($id, $cart)){
                foreach ($cart as $key => $product){
                    if ($key === $id){
                        $cart = $request->session()->get('cart',[]);
                        $cart[$id] = $product + (int)$qte;
                        $request->session()->put('cart', $cart);
                    }
                }
            }else{
                $cart = $request->session()->get('cart',[]);
                $cart[$id] = (int)$qte;
                $request->session()->put('cart', $cart);
            }

        }

        if ($type_request === "Commander"){
            return redirect('/cart');
        }else{
            return back();
        }
    }
}
