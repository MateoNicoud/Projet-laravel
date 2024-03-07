@extends('layouts.app')
@section('content')
    @include('partials.header')




<div>
    slug :{{$product->slug}}
</div>

{{--Categorie :{{$productOptions->name}}--}}
<div>
</div>
<select name="option" id="selector">
    <option >-- Selectionnez votre option --</option>
@foreach($productOptions as $productOption)
    <option value="{{ $productOption->option  }}" >
        {{ $productOption->option }}
    </option>
@endforeach
</select>
<div>
    Prix option : <span id="priceProduct"></span>
</div>
<div>
{{--    Poids :{{$productOption->weight}}--}}
        Poids option: <span id="weightProduct"></span>
</div>

<div>
    Name :{{$product->name}}
</div>
<div>
    Marque :{{$product->brand}}
</div>


<div>
    description :{{$product->description}}
</div>
<div>
    reference :{{$product->reference}}
</div>
<div>
    image principale :{{$productImg->main_img}}
</div>
<div>
    image arrière :{{$productImg->back_img}}
</div>
<div>
    image gauche :{{$productImg->left_img}}
</div>
<div>
    image droite :{{$productImg->right_img}}
</div>
<div>
    image devant :{{$productImg->front_img}}
</div>
<div>
    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
    BOUTON
</button>
</div>
<script>
    document.addEventListener('DOMContentLoaded', (e) => {
        const select = document.getElementById('selector');
        const priceProduct = document.getElementById('priceProduct');
        const weightProduct = document.getElementById('weightProduct');
        const arrayProduct = <?php echo json_encode($productOptions); ?>;
        console.log(arrayProduct)
        select.addEventListener('input', (e) => {
            selectValue = e.target.value;
            for(let i = 0; i < arrayProduct.length ; i++){
                if(selectValue == arrayProduct[i].option){
                    console.log(arrayProduct[i].price_ttc)
                    priceProduct.innerText = arrayProduct[i].price_ttc
                    weightProduct.innerText = arrayProduct[i].weight

                }
            }
        })
    })
</script>


    @include('partials.footer')
@endsection
{{--@php(dd($product,$productOptions,$productCategory,$productComments));--}}



