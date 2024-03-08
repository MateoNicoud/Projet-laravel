<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use PharIo\Manifest\Url;
use function PHPUnit\Framework\isEmpty;

class HomePageController extends Controller
{

    public function index()
    {
        $categories = Category::select('name', 'img','slug')->get();

        $products = Product::limit(15)->get();

        $arrayForProductionOption = [];

        foreach ($products as $product){

            $productOption = $product->productOptions;
            if (!empty($productOption[0])){
                array_push($arrayForProductionOption, $productOption[0]);
                $arrayForProductionOption[count($arrayForProductionOption)-1]->brand = $product->brand;
                $arrayForProductionOption[count($arrayForProductionOption)-1]->description = $product->description;
            }

        }

        return view('homePage', ['productionOption' => $arrayForProductionOption], ['categories' => $categories]);

    }
}
