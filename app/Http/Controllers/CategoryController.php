<?php

namespace App\Http\Controllers;

use App\Category;
use DB;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('back-end.category.category',[
            'categories' => $categories
        ]);
    }
    public function addCategory(){
        return view('back-end.category.add-category');
    }
    public function saveCategory(Request $request){

        //Elequent ORM System
        /********* For Small inputs ********/
        Category::create($request->all());

        /********** For large input + image *******/
//        $category = new Category();
//        $category->cat_name = $request->cat_name;
//        $category->cat_desc = $request->cat_desc;
//        $category->status = $request->status;
//        $category->save();

        //Query Builder
//        DB::table('categories')->insert([
//            'cat_name' => $request -> cat_name,
//            'cat_desc' => $request -> cat_desc,
//            'status' => $request -> status
//        ]);
        return back()->with('message','Category Added Successfully');
    }
    public function unpublishCategory($id){
        $category = Category::find($id);
        $category->status=0;
        $category->save();
        return back()->with('message', 'Category: '. $category->cat_name.' is now changed to UNPUBLISHED status');
    }
    public function publishCategory($id){
        $category = Category::find($id);
        $category->status=1;
        $category->save();
        return back()->with('message', 'Category: '. $category->cat_name.' is now changed to PUBLISHED status');
    }
    public function editCategory($id){
        $category = Category::find($id);
        return view('back-end.category.edit-category',[
            'category' => $category
        ]);
    }
    public function updateCategory(Request $request){
        $category = Category::find($request->id);
        $category->cat_name = $request->cat_name;
        $category->cat_desc = $request->cat_desc;
        $category->status = $request->status;
        $category->save();
        return back()->with('message', 'Category updated successfully');
    }
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return back()->with('message', 'Category: '.$category->cat_name.' has been removed');
    }
}
