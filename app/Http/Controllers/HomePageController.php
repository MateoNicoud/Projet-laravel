<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use PharIo\Manifest\Url;

class HomePageController extends Controller
{
    public function index()
    {


        $categories = Category::all();
        return view('homepage', ['categories' => $categories]);
    }
}
