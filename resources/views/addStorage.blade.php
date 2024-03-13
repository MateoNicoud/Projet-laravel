@extends('layouts.app')
@section('content')
    @include('partials.header')
    <nav class="bg-gray-800 text-white mx-auto px-8 py-6">
        <div class="flex justify-between items-center flex-wrap">
            <div class="flex items-center">
                <h1 class="text-lg mr-6"><a href="{{route('dashboard')}}">Dashboard</a></h1>
                <div>
                    <a href="{{route('addStorage')}}" class="mx-4 px-4">Ajouter produit</a>
                    <a href="#" class="mx-4 px-4">Modifier produit</a>
                    <a href="{{route('updateCategory')}}" class="mx-4 px-4">Modifier une catégorie</a>
                    <a href="#" class="mx-4 px-4">Gestion des utilisateurs</a>
                </div>
            </div>
            <div class="flex">
                <form method="post" action="{{route('logout')}}">
                    @csrf
                    <input class="mx-6 px-6 hover:cursor-pointer" type="submit" value="Déconnexion">
                </form>
                <h3>{{$user->name}}</h3>
            </div>
        </div>
    </nav>

    <div class="mx-auto max-w-5xl px-2 sm:px-4 lg:divide-y lg:divide-gray-200 lg:px-8">
        <h1 class="text-3xl mt-10">Ajouter un produit</h1>
        <form action="{{route('addStorage')}}" method="post" class="mt-10">
            @csrf
            <div class="flex flex-col">
                <labe>Nom du produit</labe>
                <input name="name" class="rounded-md" type="text">
            </div>
            <div class="flex flex-col">
                <labe>Marque</labe>
                <input name="brand" class="rounded-md" type="text">
            </div>
            <div class="flex justify-between flex-wrap">
                <div class="flex flex-col">
                    <labe>Prix</labe>
                    <div class="flex items-center">
                        <input name="price_ttc" class="rounded-md" type="number" min="0" step="0.01">
                        <span class="ml-4 text-lg">€</span>
                    </div>

                </div>
                <div class="flex flex-col">
                    <labe>TVA</labe>
                    <select name="vat" class="rounded-lg">
                        <option>-- Selectionner une TVA --</option>
                        @if(empty(!$vats))
                            @foreach($vats as $vat)
                                <option value="{{$vat->id}}">{{$vat->vat}} %</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>

            <div class="flex flex-col flex-wrap">
                <labe>Catégorie</labe>
                <select name="category" class="rounded-lg">
                    <option>-- Sélectionner une catégorie --</option>
                    @if(empty(!$categories))
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>

                        @endforeach
                    @endif
                </select>
            </div>
            <div class="flex flex-col">
                <labe>Description</labe>
                <input class="rounded-md" name="description" type="text">
            </div>
            <div class="flex items-center justify-between flex-wrap">
                <div class="flex flex-col">
                    <labe>Stock</labe>
                    <div>
                        <input class="rounded-md" name="stock" type="number" min="0">
                        <span class="ml-4">Unité</span>
                    </div>
                </div>
                <div class="flex flex-col">
                    <labe>Poids</labe>
                    <div class="flex items-center">
                        <input class="rounded-md" name="weight" type="number" min="0" step="0.01">
                        <span class="ml-4">Kg</span>
                    </div>
                </div>
            </div>

            <div class="flex flex-col">
                <labe>Option</labe>
                <input class="rounded-md" name="option" type="text">
            </div>
            <div class="flex items-center justify-center mt-10">
                <input type="submit" value="Créer le produit" class="bg-gray-800 text-white px-8 py-4 rounded-full">
            </div>
        </form>
    </div>
    @include('partials.footer')
@endsection
