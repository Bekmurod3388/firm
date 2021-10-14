<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        $vendors=Vendor::all();
        $posts = Post::orderBy('id', 'desc')->take(5)->get();
        return view('index',compact('posts','vendors','products','categories'));
    }
    public function lang_change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        return view('index');
    }

}
