<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\ProductVendors;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $vendors = Vendor::all();
        return view('admin.products.create',compact('categories', 'vendors'));

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
            'head2_ru' => 'required',
            'description_ru' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:16000',
            'img2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:16000',
            'category_id' => 'required'
        ]);
        $uuid = Str::uuid()->toString();
        $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
        $fileName2 = $uuid . '-' . time() . '.' . $request->img2->extension();
        $request->img->move(public_path('../storage/app/public/products'), $fileName);
        $request->img2->move(public_path('../storage/app/public/products'), $fileName2);
        $product = new Product();
        $product->fill([
            'head_ru' => $request->head_ru,
            'head2_ru' => $request->head2_ru,
            'description_ru' => $request->description_ru,
            'head_en' => $request->head_en,
            'head2_en' => $request->head2_en,
            'description_en' => $request->description_en,
            'img' => $fileName,
            'img2' => $fileName,
            'category_id' => $request->category_id
        ]);
        $product->save();
        $vendors=$request->input('vendor_id');
        if(isset($vendors)){

            $product->vendors()->sync($vendors);
        }
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

        $last_id = Product::latest('id')->first();
        $vendors = $product->vendors()->get();
        return view('product-item.product-item', compact('product','last_id','vendors'));
    }

    public function products_show()
    {
        $categories = Category::all();
        $products = Product::all();
        $p_array = $products->toArray();


        return view('products', compact('categories', 'products', 'p_array'));
    }

    public function products_by_categories($category) {
        return Product::query()->where('category_id', $category)->get();
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
        $vendors = Vendor::all();
        return view('admin.products.edit', compact('product', 'categories','vendors'));
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
            'category_id'=>'required',
        ]);
        if ($request->hasFile('img')) {
            $uuid = Str::uuid()->toString();
            $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('../storage/app/public/products'), $fileName);
            $product->update([
                'head_ru' => $request->head_ru,
                'head2_ru' => $request->head2_ru,
                'description_ru' => $request->description_ru,
                'head_en' => $request->head_en,
                'head2_en' => $request->head2_en,
                'description_en' => $request->description_en,
                'img' => $fileName,
                'category_id' => $request->category_id
            ]);
        }
        if($request->hasFile('img2')) {
            $uuid = Str::uuid()->toString();
            $fileName2 = $uuid . '-' . time() . '.' . $request->img2->extension();
            $request->img2->move(public_path('../storage/app/public/products'), $fileName2);
            $product->update([
                'head_ru' => $request->head_ru,
                'head2_ru' => $request->head2_ru,
                'description_ru' => $request->description_ru,
                'head_en' => $request->head_en,
                'head2_en' => $request->head2_en,
                'description_en' => $request->description_en,
                'img2' => $fileName2,
                'category_id' => $request->category_id
            ]);}
        else{
            $product->update($request->all());

        }
        $vendors=$request->input('vendor_id');
        if(isset($vendors)){
            $product->vendors()->sync($vendors);
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
