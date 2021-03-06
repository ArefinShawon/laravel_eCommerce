<?php
//frontend routes starts
Route::get('/','FrontController@index');

Route::get('/category', 'FrontController@category')->name('category');
Route::get('/category2', 'FrontController@category2')->name('category2');
Route::get('/singleProduct_1', 'FrontController@singleProduct_1')->name('singleProduct_1');
Route::get('/singleProduct_2', 'FrontController@singleProduct_2')->name('singleProduct_2');
Route::get('/about','FrontController@about')->name('about');
Route::get('/contact','FrontController@contact')->name('contact');
Route::get('/help','FrontController@help')->name('help');
Route::get('/faqs','FrontController@faqs')->name('faqs');
Route::get('/termsOfUse','FrontController@termsOfUse')->name('termsOfUse');
//end of fornt end routes


//backend routes stats
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin-category', 'CategoryController@index')->name('admin-category');
Route::get('/add-category', 'CategoryController@addCategory')->name('add-category');
Route::post('/save-category', 'CategoryController@saveCategory')->name('save-category');
Route::get('/unpublished-category/{id}', 'CategoryController@unpublishCategory')->name('unpublished-category');
Route::get('/published-category/{id}', 'CategoryController@publishCategory')->name('published-category');
Route::get('/edit-category/{id}', 'CategoryController@editCategory')->name('edit-category');
Route::post('/update-category', 'CategoryController@updateCategory')->name('update-category');
Route::get('/delete-category/{id}', 'CategoryController@deleteCategory')->name('delete-category');

//Brand using resource
Route::resource('brand', 'BrandController');
Route::get('/unpublished-brand/{id}', 'BrandController@unpublishBrand')->name('unpublished-brand');
Route::get('/published-brand/{id}', 'BrandController@publishBrand')->name('published-brand');

//Product
Route::resource('product', 'ProductController');
Route::get('/unpublished-product/{id}', 'ProductController@unpublishProduct')->name('unpublished-product');
Route::get('/published-product/{id}', 'ProductController@publishProduct')->name('published-product');
