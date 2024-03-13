<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UpdateCategoryController extends Controller
{
    public function index(Request $request)
    {

        $categories = Category::all();
        return view('/updateCategory', ['categories' => $categories]);

    }

    public function updateCategory(Request $request)
    {
        $validated = $request->validate([
//            'id' => ['exists:categories,id'],
            'name' => ['required', 'unique:categories', 'max:255'],
            'img' =>['max:255'],
        ]);
        $id = strip_tags($request->input('category'));
        Category::find($id)->update([
            'name' => $request->name,
            'img'=> $request->img,
            'slug' => Str::slug($request->name)
        ]);

        return redirect('/dashboard');

    }
}
