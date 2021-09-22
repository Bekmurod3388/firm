<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Post;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function index()
    {
        $vendors=Vendor::all();
        $posts = Post::orderBy('id', 'desc')->take(5)->get();
        return view('index',compact('posts','vendors'));
    }
    public function lang_change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        return view('index');
    }

}
