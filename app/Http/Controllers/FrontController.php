<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
//        $categories = Category::where('status',1)->get();
        $products = Product::orderBy('id','desc')->where('status',1)->get();
        return view('front-end.home.home',[
//            'categories'=>$categories,
            'products' =>$products
        ]);
    }
    public function category(){
        return view('front-end.category.category');
    }
    public function category2(){
        return view('front-end.category.category2');
    }
    public function singleProduct_1(){
        return view('front-end.product.singleProduct_1');
    }
    public function singleProduct_2(){
        return view('front-end.product.singleProduct_2');
    }
    public function about(){
        return view('front-end.about.about');
    }
    public function contact(){
        return view('front-end.contact.contact');
    }
    public function help(){
        return view('front-end.others.help');
    }
    public function faqs(){
        return view('front-end.others.faqs');
    }
    public function termsOfUse(){
        return view('front-end.others.termsOfUse');
    }
}
