<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\Category;
use App\Models\VendorFiles;
use App\Models\VendorFilm;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $vendors = Vendor::all();
        return view('admin.vendors.index')->with('vendors', $vendors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.vendors.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $vendor = $request->all();
        $vendor['text'] = $vendor['description'];
        if ($request->hasfile('files')) {
            foreach ($request->file('files') as $file) {
                $data[] = ['path' => $this->createPath('vendor', $file),'file_name'=>$file->getClientOriginalName()];
            }
            unset($vendor['files']);
        }
        if ($request->hasfile('img')) {
            $img_name = $this->createPath('vendor', $request->file('img'));
            unset($vendor['img']);
            $vendor['img'] = $img_name;
        }
        if ($request->hasfile('back')) {
            $img_name1 = $this->createPath('vendor', $request->file('back'));
            unset($vendor['back']);
            $vendor['back'] = $img_name1;
        }
        $file = new Vendor();
        $file->fill($vendor);
        $file->save();

        if (!empty($data))
            $file->vendorFiles()->createMany($data);

        /* This place needs to function */
        $id = $file->id;
        $links = json_decode($request->get('links'), true);
        foreach ($links as $link) {
            $link['vendor_id'] = $id;
            $vendor_film = new VendorFilm();
            $vendor_film->fill($link);
            $vendor_film->save();
        }
        /* ~This place needs to function */

        return redirect()->route('admin.vendors.index')->with('success', 'Data Your files has been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param Vendor $vendor
     */
    public function show(Vendor $vendor)
    {
        $categories = Category::all();
        $vendors = Vendor::all();
        return view('vendors',['vendors'=> $vendors,'categories'=>$categories]);
    }

    public function get_category_vendors(Category $category){

        $categories = Category::all();
        return view('vendors',['vendors'=>$category->vendors, 'categories'=>$categories]);
    }

    public function show_vendor(Vendor $vendor)
    {

        return view('about-vendor.about-vendor', ['vendor'=>$vendor]);
    }

    public function getVendorsByCategories($category) {
        return Vendor::query()->where('category_id', $category)->get();
//        return ['a' => 5];
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param Vendor $vendor
     * @return Application|Factory|View
     */
    public function edit(Vendor $vendor)
    {
        $categories = Category::all();
        return view('admin.vendors.edit', ['model' => $vendor,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Vendor $vendor
     * @return RedirectResponse
     */
    public function update(Request $request, Vendor $vendor): RedirectResponse
    {
        $model = $request->all();
        $data = [];
        if ($request->hasfile('files')) {
            foreach ($request->file('files') as $file) {
                $data[] = ['path' => $this->createPath('vendor', $file)];
            }
            unset($model['files']);
        }
        if ($request->hasfile('img')) {
            $this->deletePath($vendor->img);
            $img_name = $this->createPath('vendor', $request->file('img'));
            unset($model['img']);
            $model['img'] = $img_name;
        }
        if ($request->hasfile('back')) {
            $this->deletePath($vendor->back);
            $img_name1 = $this->createPath('vendor', $request->file('back'));
            unset($vendor['back']);
            $vendor['back'] = $img_name1;
        }
        $vendor->fill($model);
        $vendor->save();
        if (!empty($data)) {
            foreach ($vendor->vendorFiles as $vendorFile)
                $this->deletePath($vendorFile->path);

            $vendor->vendorFiles()->forceDelete();
            $vendor->vendorFiles()->createMany($data);
        }
        return back()->with('success', 'Data Your files has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Vendor $vendor
     * @return RedirectResponse
     */
    public function destroy(Vendor $vendor): RedirectResponse
    {
        if (!is_null($vendor->img))
            $this->deletePath($vendor->img);
        if (!empty($vendor->vendorFiles)) {
            foreach ($vendor->vendorFiles as $vendorFile)
                $this->deletePath($vendorFile->path);
            $vendor->vendorFiles()->forceDelete();
        }
        $vendor->delete();
        return back()->with('success', 'Data Your files has been successfully deleted');
    }


    public function createPath(string $path, UploadedFile $file): string
    {
        $fileName = time() . '.' . $file->extension();
        $file->storeAs($path, $fileName, ['disk' => 'public']);
        return $path . '/' . $fileName;
    }

    public function deletePath(?string $path): bool
    {
        if ($path)
            return Storage::disk('public')->delete($path);
        return true;
    }
}
