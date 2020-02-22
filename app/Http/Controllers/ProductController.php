<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\ProductGallery;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('back-end.product.product',[
            'products'=>$products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status',1)->get();
        $brands = Brand::where('status',1)->get();
        return view('back-end.product.addProduct',[
            'categories'=>$categories,
            'brands' =>$brands
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proImage = $request->file('pro_image');
        $imageName =  date('mdYHis').uniqid().$proImage->getClientOriginalName();
        $directory = 'backend-assets/images/product_images/';
        $imageUrl = $directory.$imageName;
        Image::make($proImage)->save($imageUrl);

        $product = new Product();
        $product->cat_id = $request->cat_id ;
        $product->brand_id = $request->brand_id ;
        $product->pro_name = $request->pro_name ;
        $product->pro_short_desc = $request->pro_short_desc ;
        $product->pro_long_desc = $request->pro_long_desc ;
        $product->pro_price = $request->pro_price ;
        $product->pro_discount = $request->pro_discount ;
        $product->pro_qty = $request->pro_qty ;
        $product->pro_image =$imageUrl ;
        $product->status = $request->status ;
        $product->save();

        $galleryImages = $request->file('pro_gallery');
        foreach ($galleryImages as $galleryImage){
            $imageName =  date('mdYHis').uniqid().$galleryImage->getClientOriginalName();
            $directory = 'backend-assets/images/product_images/gallery/';
            $imageUrl = $directory.$imageName;
            Image::make($galleryImage)->save($imageUrl);

            $productGallery = new ProductGallery();
            $productGallery->product_id =$product->id;
            $productGallery->pro_gallery = $imageUrl;
            $productGallery->save();
        }
        return back()->with('message','Product added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
