@extends('back-end.master')

@section('title')
    Admin Panel | Add Product
@endsection

@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        @if(Session::get('message'))
            <div class="alert alert-success">
                <strong>{{Session::get('message')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="offset-3 col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Product</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{url('product')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <select name="cat_id" id="cat_id" class="form-control">
                                            <option value="">--Select Category--</option>
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Brand Name</label>
                                        <select name="brand_id" id="brand_id" class="form-control">
                                            <option value="">--Select Brand--</option>
                                            @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" class="form-control" name="pro_name" placeholder="Enter product name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Short Description</label>
                                        <input type="text" class="form-control" name="pro_short_desc" placeholder="Enter Product Short Description" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Long Description</label>
                                        <textarea type="text" class="form-control" name="pro_long_desc" id="long-description" placeholder="Enter Product Long Description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Price</label>
                                        <input type="number" class="form-control" name="pro_price" placeholder="Enter Price" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Discount Price</label>
                                        <input type="number" class="form-control" name="pro_discount" placeholder="Enter Discount Price">
                                    </div>
                                    <div class="form-group">
                                        <label>Product Quantity</label>
                                        <input type="number" class="form-control" name="pro_qty" placeholder="Enter Product Quantity">
                                    </div>
                                    <div class="form-group">
                                        <label>Product Image</label>
                                        <input type="file" class="form-control" name="pro_image" id="imgInp"><img id="blah" width="100">
                                    </div>
                                    <div class="form-group">
                                        <label>Gallery Image</label>
                                        <input type="file" class="form-control" name="pro_gallery[]" multiple>
                                    </div>
                                    <div class="form-group">
                                        <label>Publication Status</label>
                                        <select name="status" class="form-control">
                                            <option>--Select Publication Status--</option>
                                            <option value="1">Published</option>
                                            <option value="0">Unpublished</option>
                                        </select>
                                    </div>
                                    <!-- /.card-body -->
                                    <button type="submit" class="btn btn-primary">Save Category</button>
                                </div>
                            </form>

                        </div>
                        <!-- /.card -->
                        <a href="{{url('product')}}" class="fa fa-arrow-circle-left"> Return to Product</a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
