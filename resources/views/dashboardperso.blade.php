@extends('layouts.app')
@section('content')
    <nav class="bg-gray-800 text-white mx-auto">
        <div class="flex justify-between">
            <div class="flex">
                <h1 class="text-lg m-20">Dashboard</h1>
                <div>
                    <a href="#">Ajouter produit</a>
                    <a href="#">Modifier produit</a>
                    <a href="#">Gestion des utilisateurs</a>
                </div>
            </div>
            <div class="flex">
                <a href="#">Déconnexion</a>
                <h3>{{$user->name}}</h3>
            </div>
        </div>
    </nav>
@endsection
