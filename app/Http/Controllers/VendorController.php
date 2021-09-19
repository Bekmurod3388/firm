<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\Vendorfiles;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::all();
        return view('admin.vendors.index')->with('vendors',$vendors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vendors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if($request->hasfile('files'))
        {
            foreach($request->file('files') as $file)
            {
                $name = time().'.'.$file->extension();
                $file->move(public_path().'/files/', $name);
                $data[] = $name;
            }
        }
        if($request->hasfile('img'))
        {
                $img_name = time().'.'.$request->file('img')->extension();
                $request->img->move(public_path().'/vendor/', $img_name);
        }


        $file= new Vendor();
        $file->filenames=json_encode($data);
        $file->save();


        return back()->with('success', 'Data Your files has been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        //
    }
}
