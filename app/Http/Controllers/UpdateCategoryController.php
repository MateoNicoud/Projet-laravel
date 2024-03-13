<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCategory;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
//use App\Rules\UpdateCategory;


class UpdateCategoryController extends Controller
{
    public function index(Request $request)
    {

        $categories = Category::all();
        return view('/updateCategory', ['categories' => $categories]);

    }

    public function updateCategory(UpdateCategoryRequest $request)
    {

        $id = $request->input('category');
        Category::find($id)->update([
            'name' => $request->name,
            'img'=> $request->img,
            'slug' => Str::slug($request->name)
        ]);

        return redirect('/updateCategory');

    }
}
