@extends('back-end.master')
@section('title')
    Admin Panel | Product
@endsection
@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                @if(Session::get('message'))
                    <div class="alert alert-default-success">
                        <h6>{{Session::get('message')}}</h6>
                        {{--                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                        {{--                                                    <span aria-hidden="true">&times;</span>--}}
                        {{--                                                </button>--}}
                    </div>
                @endif
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Product</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Product Name</th>
                            <td>{{$product->pro_name}}</td>
                        </tr>
                        <tr>
                            <th>Product Category Name</th>
                            <td>{{$product->categories->cat_name}}</td>
                        </tr>
                        <tr>
                            <th>Product Brand Name</th>
                            <td>{{$product->brands->brand_name}}</td>
                        </tr>
                        <tr>
                            <th>Product Short Description</th>
                            <td>{{$product->pro_short_desc}}</td>
                        </tr>
                        <tr>
                            <th>Product Long Description</th>
                            <td>{!! $product->pro_long_desc !!}</td>
                        </tr>
                        <tr>
                            <th>Product Price</th>
                            <td>{{$product->pro_price}}</td>
                        </tr>
                        <tr>
                            <th>Product Discount Price</th>
                            <td>{{$product->pro_discount}}</td>
                        </tr>
                        <tr>
                            <th>Product Quantity</th>
                            <td>{!! $product->pro_qty !!}</td>
                        </tr>
                        <tr>
                            <th>Product Image</th>
                            <td><img src="{{asset($product->pro_image)}}" width="200"></td>
                        </tr>
                        <tr>
                            <th>Gallery Image</th>
                            <td>
                                @foreach($product->productGallery as $gallery)
                                    <img src="{{asset($gallery->pro_gallery)}}" width="150">
                                @endforeach
                            </td>
                        </tr>
{{--                        {{dd($product->productGallery->pro_gallery)}}--}}
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
