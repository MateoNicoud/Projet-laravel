@extends('layouts.app')
@section('content')
    @include('partials.header')
    <nav class="bg-gray-800 text-white mx-auto px-8 py-6">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <h1 class="text-lg mr-6">Dashboard</h1>
                @if($user->credential->type_permission == 'admin')
                    <div>
                        <a href="{{route('addStorage')}}" class="mx-4 px-4">Ajouter produit</a>
                        <a href="{{route('selectProduct')}}" class="mx-4 px-4">Modifier produit</a>
                        <a href="{{route('updateCategory')}}" class="mx-4 px-4">Modifier une catégorie</a>
                        <a href="#" class="mx-4 px-4">Gestion des utilisateurs</a>

                    </div>
                @endif

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
@endsection
