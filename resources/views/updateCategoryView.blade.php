@extends('layouts.app')
@section('content')
    @include('partials.header')

    <nav class="bg-gray-800 text-white mx-auto px-8 py-6">
        <div class="flex justify-between items-center flex-wrap">
            <div class="flex items-center">
                <h1 class="text-lg mr-6"><a href="{{route('dashboard')}}">Dashboard</a></h1>
                <div>
                    <a href="{{route('addStorage')}}" class="mx-4 px-4">Ajouter produit</a>
                    <a href="{{route('selectProduct')}}" class="mx-4 px-4">Modifier produit</a>
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

    <div>
    <form action="{{route('updateCategory')}}" method="post" class="mt-10">
        @csrf
        <select name="id" class="rounded-lg">
            <option>-- Sélectionner une catégorie --</option>
            @if(empty(!$categories))
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>

                @endforeach
            @endif
        </select>
        <div class="flex flex-col">
            <label>Nom de la catégorie</label>
            <input name="name" class="rounded-md" type="text">
        </div>
        <div class="flex items-center justify-center mt-10">
            <input type="submit" value="Modifier la catégorie" class="bg-gray-800 text-white px-8 py-4 rounded-full">
        </div>
    </form>





</div> @include('partials.footer')
@endsection
