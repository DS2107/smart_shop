<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function categories()
    {
        $categories= Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code)
    {
        $category = Category::where('code',$code)->first();

        return view('category',compact('category'));
    }

    public function busket()
    {
        return view('busket');
    }

    public function busketPlace()
    {
        return view('order');
    }
    public function product($category, $product = null)
    {
        dump($product);
        return view('product', ['product' => $product]);
    }


}
