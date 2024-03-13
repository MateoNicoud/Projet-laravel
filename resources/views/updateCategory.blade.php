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
            </div>
        </div>
    </nav>

    <div class="mx-auto max-w-5xl px-2 sm:px-4 lg:divide-y lg:divide-gray-200 lg:px-8">
        <h1 class="text-3xl mt-10">Ajouter un produit</h1>
        <form action="{{route('updateCategory')}}" method="post" class="mt-10">
            @csrf
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
                <label>Nom de la catégorie</label>
                <input name="name" class="rounded-md @error('name') is-invalid @enderror" type="text">
                @error('name')
                <div class="alert alert-danger">geremy te juge</div>
                @enderror
            </div>
            <div class="flex flex-col">
                <label>Url image</label>
                <input name="img" class="rounded-md" type="text">
            </div>
            <div class="flex items-center justify-center mt-10">
                <input type="submit" value="Modifier la catégorie"
                       class="bg-gray-800 text-white px-8 py-4 rounded-full">
            </div>
        </form>
    </div>
    @include('partials.footer')
@endsection
