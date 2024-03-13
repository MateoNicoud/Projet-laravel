@extends('layouts.app')
@section('content')
    @include('partials.header')
    <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <div>
            <a class="font-light underline underline-offset-2" href="/">catégorie</a> > <a class="font-light lowercase underline underline-offset-2" href="/catalog/{{$productCategory->slug}}"> {{$productCategory->name}} </a>
        </div>

        <div class="flex mt-20 flex-wrap flex-col lg:flex-row p-3 ">
            <div class="flex-auto grow lg:w-64">

                <div class="h-96 carousel carousel-vertical rounded">
                    <div class="carousel-item h-full">
                        <img src="{{empty($productImg->main_img)?'https://placehold.co/300' : $productImg->main_img}}"
                             class="w-full" alt="Tailwind CSS Carousel component"/>
                    </div>
                    <div class="carousel-item w-full">
                        <img src="{{empty($productImg->front_img)?'https://placehold.co/300' : $productImg->front_img}}"
                             class="w-full" alt="Tailwind CSS Carousel component"/>
                    </div>
                    <div class="carousel-item w-full">
                        <img src="{{empty($productImg->left_img)?'https://placehold.co/300' : $productImg->left_img}}"
                             class="w-full" alt="Tailwind CSS Carousel component"/>
                    </div>
                    <div class="carousel-item w-full">
                        <img src="{{empty($productImg->right_img)?'https://placehold.co/300' : $productImg->right_img}}"
                             class="w-full" alt="Tailwind CSS Carousel component"/>
                    </div>
                    <div class="carousel-item w-full">
                        <img src="{{empty($productImg->back_img)?'https://placehold.co/300' : $productImg->back_img}}"
                             class="w-full" alt="Tailwind CSS Carousel component"/>
                    </div>
                </div>
            </div>

            <div class="flex items-stretch flex-col justify-between grow lg:w-32 m-4">
                <div class="font-bold text-lg">
                    {{empty($product->brand)? 'pas de référence': $product->brand}}
                </div>
                <div class="mt-2 font-semibold">
                    {{empty($product->name)? 'pas de référence': $product->name}}
                </div>


                <div class="mt-2">
                    <select name="option" id="selector">
                        <option>-- Selectionnez votre option --</option>
                        @if(empty($productOptions[0])? 'pas de référence': $productOptions[0])
                            @foreach($productOptions as $productOption)
                                <option value="{{ $productOption->option  }}">
                                    {{ $productOption->option }}
                                </option>
                            @endforeach
                        @endif

                    </select>
                </div>

                <div class="mt-2">
                    Prix option : <span id="priceProduct"></span> €
                </div>

                <div class="mt-2 font-light">

                    Poids option: <span id="weightProduct"></span> kg
                </div>
                <div class="mt-2">
                    <p>
                        Description : {{empty($product->description)? 'pas de référence': $product->description}}
                    </p>
                </div>
                <div class="mt-2 font-light">
                    Ref : {{empty($product->reference)? 'pas de référence': $product->reference}}
                </div>

                <div class="mt-2 flex flex-col lg:flex-row">
                    <button
                        class="btn btn-success m-2 lg:mx-2">
                        Commander
                    </button>
                    <button
                        class="btn btn-outline m-2 lg:mx-2">
                        Ajouter au panier
                    </button>
                </div>


            </div>

        </div>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', (e) => {
            const select = document.getElementById('selector');
            const priceProduct = document.getElementById('priceProduct');
            const weightProduct = document.getElementById('weightProduct');
            const arrayProduct = <?php echo json_encode(empty($productOptions) ? 'null' : $productOptions); ?>;

            select.addEventListener('input', (e) => {
                selectValue = e.target.value;
                for (let i = 0; i < arrayProduct.length; i++) {
                    if (selectValue == arrayProduct[i].option) {
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
