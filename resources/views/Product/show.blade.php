@extends('layouts.app')
@section('content')
    @include('partials.header')

    <div>
        catalogue/{{$productCategory->name}}/{{$product->slug}}
    </div>

    </div>
    <div class="flex flex-wrap p-3">
        <div class="flex-auto w-64">

            <div class="h-96 carousel carousel-vertical rounded">
                <div class="carousel-item h-full">
                    <img src="{{$productImg->main_img}}" class="w-full" alt="Tailwind CSS Carousel component"/>
                </div>
                <div class="carousel-item w-full">
                    <img src="{{$productImg->front_img}}" class="w-full" alt="Tailwind CSS Carousel component"/>
                </div>
                <div class="carousel-item w-full">
                    <img src="{{$productImg->left_img}}" class="w-full" alt="Tailwind CSS Carousel component"/>
                </div>
                <div class="carousel-item w-full">
                    <img src="{{$productImg->right_img}}" class="w-full" alt="Tailwind CSS Carousel component"/>
                </div>
                <div class="carousel-item w-full">
                    <img src="{{$productImg->back_img}}" class="w-full" alt="Tailwind CSS Carousel component"/>
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
            <div>
                <select name="option" id="selector">
                    <option>-- Selectionnez votre option --</option>
                    @foreach($productOptions as $productOption)
                        <option value="{{ $productOption->option  }}">
                            {{ $productOption->option }}
                        </option>
                    @endforeach
                </select>
                <div>
                    Prix option : <span id="priceProduct"></span>
                </div>
                <div>

                    Poids option: <span id="weightProduct"></span>
                </div>

                description :{{$product->description}}
                <div>
                    <button
                        class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        commander
                    </button>
                    <button
                        class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        Ajouter au panier
                    </button>
                </div>
            </div>
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
{{--@php(dd($product,$productOptions,$productCategory,$productComments));--}}



