@extends('layouts.app')
@section('content')
    @include('partials.header')
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
    <button class="btn btn-neutral">Neutral</button>
    <div class="min-h-lvh">
        <h1>tes</h1>
    </div>
    @foreach($productionOption as $product)

        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="https://placehold.co/600x400" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{$product->brand}}</div>
                <p class="text-gray-700 text-base">
                    {{$product->description}}
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$product->price_ttc}} €</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
{{--                <form method="post" action="/addToCart">--}}
{{--                    @csrf--}}
{{--                    <input class="btn" name="qte_product" value="{{1}}" type="submit" />--}}
{{--                </form>--}}
                <form method="post" action="{{route('addToCart', $product->id)}}">
                    @csrf
                    <input type="number" name="qte_product" value="1">
                    <input type="Submit" name="btn_order" value="Commander" class="btn"/>
                    <input type="Submit" name="btn_cart" value="Ajouter au panier" class="btn"/>
                </form>
            </div>
        </div>
    @endforeach
    @include('partials.footer')
@endsection


