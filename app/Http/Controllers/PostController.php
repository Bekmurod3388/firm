<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\ShopAd;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->get();
        return view('admin.posts.index')->with('posts', $posts);
    }

    public function news()
    {
        $posts = Post::orderBy('id','desc')->get();
        return view('news')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'header' => 'required',
            'header2' => 'required',
            'description' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:16000',
            'uri' => 'required| unique:posts',
        ]);
        $uuid = Str::uuid()->toString();
        $fileName = $uuid.'-'.time().'.'.$request->img->extension();
        $request->img->move(public_path('../storage/app/public/posts'), $fileName);
        Post::create([
            'header'=>$request->header,
            'header2'=>$request->header2,
            'description'=>$request->description,
            'img' => $fileName,
            'uri'=>$request->uri,
        ]);
        addAlert('success');
        return redirect()->route('admin.posts.index')->with('success','Новости успешно созданы.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        Post::where('id', $post->id)
            ->update([
                'viewed'=> DB::raw('viewed+1'),

            ]);

        return view('news-item.news-item',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'header' => 'required',
            'header2' => 'required',
            'description' => 'required',
            'uri' => 'required| unique:posts',
        ]);
        $uuid = Str::uuid()->toString();
        $fileName = $uuid.'-'.time().'.'.$request->img->extension();
        $request->img->move(public_path('../storage/app/public/posts'), $fileName);
        $post->update([
            'header'=>$request->header,
            'header2'=>$request->header2,
            'description'=>$request->description,
            'img' => $fileName,
            'uri'=>$request->uri,
        ]);

        return redirect()->route('admin.posts.index')
            ->with('success','Новости успешно обновлено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index')
            ->with('success','Новости успешно удалено');
    }
}
