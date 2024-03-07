@extends('layouts.app')
@section('content')
    @include('partials.header')




<div>
    slug :{{$product->slug}}
</div>

{{--Categorie :{{$productOptions->name}}--}}
<div>

 <div>



 </div>


</div>
 <div class="flex flex-wrap p-3">
<div class="flex-auto w-64">

    <div class="h-96 carousel carousel-vertical rounded">
        <div class="carousel-item h-full">
            <img src="{{$productImg->main_img}}" class="w-full" alt="Tailwind CSS Carousel component" />
        </div>
        <div class="carousel-item w-full">
            <img src="{{$productImg->front_img}}" class="w-full" alt="Tailwind CSS Carousel component" />
        </div>
        <div class="carousel-item w-full">
            <img src="{{$productImg->left_img}}" class="w-full" alt="Tailwind CSS Carousel component" />
        </div>
        <div class="carousel-item w-full">
            <img src="{{$productImg->right_img}}" class="w-full" alt="Tailwind CSS Carousel component" />
        </div>
        <div class="carousel-item w-full">
            <img src="{{$productImg->back_img}}" class="w-full" alt="Tailwind CSS Carousel component" />
        </div>
    </div>
</div>

     <div class="flex-auto w-32">
         <div>
             Name :{{$product->name}}
         </div>
         <div>
             Marque :{{$product->brand}}
         </div>
         <div>
             reference :{{$product->reference}}
         </div>
         @foreach($productOptions as $productOption)
         <fieldset name="option" id="selector" class="mt-4">
             <legend class="sr-only">sélectionner votre option</legend>
             <div class="grid grid-cols-3 gap-2 sm:grid-cols-8 lg:grid-cols-4">
                 <!-- Active: "ring-2 ring-indigo-500" -->
                 <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-not-allowed bg-gray-50 text-gray-200">
                     <input type="radio" name="option" value="{{ $productOption->option  }}"  class="sr-only" aria-labelledby="size-choice-0-label">
                     <span id="selector">{{ $productOption->option  }}</span>
                     <span aria-hidden="true" class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                    <svg class="absolute inset-0 h-full w-full stroke-2 text-gray-200" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                      <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
                    </svg>
                  </span>
                 </label>
                 <!-- Active: "ring-2 ring-indigo-500" -->
                 <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm">
                     <input type="radio" name="size-choice" value="2XL" class="sr-only" aria-labelledby="size-choice-6-label">
                     <span id="size-choice-6-label">{{ $productOption->option  }}</span>
                     <!--
                       Active: "border", Not Active: "border-2"
                       Checked: "border-indigo-500", Not Checked: "border-transparent"
                     -->
                     <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                 </label>

             </div>
         </fieldset>            @endforeach
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

        description :{{$product->description}}
    </div>

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



