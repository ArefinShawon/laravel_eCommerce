<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('back-end.brand.brand',[
            'brands' => $brands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.brand.addBrand');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $brandImage = $request->file('brand_image');
        $imageName = $brandImage->getClientOriginalName();
        $directory = 'backend-assets/images/brand-images/';
        $imageUrl = $directory.$imageName;
        $brandImage->move($directory, $imageName);

        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_desc = $request->brand_desc;
        $brand->brand_image = $imageUrl;
        $brand->status = $request->status;
        $brand->save();

        return back()->with('message', 'Brand saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('back-end.brand.editBrand',[
            'brand' => $brand
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brandImage = $request->file('brand_image');
        if ($brandImage) {
            unlink($brand->brand_image);
            $imageName = $brandImage->getClientOriginalName();
            $directory = 'backend-assets/images/brand-images/';
            $imageUrl = $directory . $imageName;
            $brandImage->move($directory, $imageName);

            $brand->brand_name = $request->brand_name;
            $brand->brand_desc = $request->brand_desc;
            $brand->brand_image = $imageUrl;
            $brand->status = $request->status;
            $brand->save();
        }else{
            $brand->brand_name = $request->brand_name;
            $brand->brand_desc = $request->brand_desc;
            $brand->status = $request->status;
            $brand->save();
        }
        return back()->with('message', 'Brand updated successfully');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
//        unlink($brand->brand_image);
        $brand -> delete();
        return back()->with('message','Brand: '. $brand->brand_name.' has been deleted');
    }

    public function publishBrand($id){
        $brand = Brand::find($id);
        $brand->status=1;
        $brand->save();
        return back()->with('message', 'Brand: '. $brand->brand_name.' is now changed to PUBLISHED status');
    }
    public function unpublishBrand($id){
        $brand = Brand::find($id);
        $brand->status=0;
        $brand->save();
        return back()->with('message', 'Brand: '. $brand->brand_name.' is now changed to UNPUBLISHED status');
    }
}
