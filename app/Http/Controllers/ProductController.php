<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create')->with('categories', $categories);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'head_ru' => 'required',
            'description_ru' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:16000',
            'category_id' => 'required'
        ]);
        $uuid = Str::uuid()->toString();
        $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
        $request->img->move(public_path('../storage/app/public/products'), $fileName);
        Product::create([
            'head_ru' => $request->head_ru,
            'description_ru' => $request->description_ru,
            'head_en' => $request->head_en,
            'description_en' => $request->description_en,
            'img' => $fileName,
            'category_id' => $request->category_id
        ]);
        addAlert('success');
        return redirect()->route('admin.products.index')->with('success', 'Продукт успешно созданы.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        return view('product-item.product-item', compact('product'));
    }

    public function products_show()
    {
        $categories = Category::all();
        $products = Product::all();
        $p_array = $products->toArray();
        return view('products', compact('categories', 'products', 'p_array'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }
    public function get_category_products(Category $category){

        $categories = Category::all();
        return view('products',['products'=>$category->products, 'categories'=>$categories]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'head_ru' => 'required',
            'description_ru' => 'required',
        ]);
        if ($request->hasFile('img')) {
            $uuid = Str::uuid()->toString();
            $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('../storage/app/public/products'), $fileName);
            $product->update([
                'head_ru' => $request->head_ru,
                'description_ru' => $request->description_ru,
                'head_en' => $request->head_en,
                'description_en' => $request->description_en,
                'img' => $fileName,
                'category_id' => $request->category_id
            ]);
        } else {
            $product->update($request->all());
        }
        return redirect()->route('admin.products.index')
            ->with('success', 'Продукт успешно обновлено');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')
            ->with('success', 'Новости успешно удалено');
    }
}
