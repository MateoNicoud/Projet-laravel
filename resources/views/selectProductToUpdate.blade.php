<div>
    @extends('layouts.app')
    @section('content')
        @include('partials.header')
        <div>
            <nav class="bg-gray-800 text-white mx-auto px-8 py-6">
                <div class="flex justify-between items-center flex-wrap">
                    <div class="flex items-center">
                        <h1 class="text-lg mr-6"><a href="{{route('dashboard')}}">Dashboard</a></h1>
                        <div>
                            <a href="{{route('addStorage')}}" class="mx-4 px-4">Ajouter produit</a>
                            <a href="#" class="mx-4 px-4">Modifier produit</a>
                            <a href="#" class="mx-4 px-4">Gestion des utilisateurs</a>
                            <a href="{{route("updateCategory")}}" class="mx-4 px-4">Modifier catégorie</a>
                            <a href="{{route("selectProduct")}}" class="mx-4 px-4">Modifier Produit</a>

                        </div>
                    </div>
                    <div class="flex">
                        <form method="post" action="{{route('logout')}}">
                            @csrf
                            <input class="mx-6 px-6 hover:cursor-pointer" type="submit" value="Déconnexion">
                        </form>
                    </div>
                </div>
            </nav>
            <div class="mx-auto max-w-5xl px-2 sm:px-4 lg:divide-y lg:divide-gray-200 lg:px-8">
                <h1 class="text-3xl mt-10">Modifier un produit</h1>

                <form action="{{route('updateProduct')}}" method="post" class="mt-10">
                    @csrf
                    <select name="id" class="rounded-lg">
                        <option>-- Sélectionner un produit --</option>
                        @if(empty(!$products))
                            @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>

                            @endforeach
                        @endif
                    </select>
                    <input type="submit" value="ok" class="bg-gray-800 text-white px-8 py-4 rounded-full">
                </form>
                @error('name')
                <div>
                    Veuillez renseignez un nom de maximum 255 caractères.
                </div>
                @enderror
                @error('description')
                <div>
                    Veuillez renseignez une description de maximum 255 caractères.
                </div>
                @enderror
                @error('brand')
                <div>
                    Veuillez renseignez une marque de maximum 255 caractères.
                </div>
                @enderror

            </div>
        </div>
@include('partials.footer')
@endsection
