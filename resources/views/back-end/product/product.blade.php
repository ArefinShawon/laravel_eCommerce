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

            <!-- Default box -->
            <!-- /.card -->
            <!-- /.card -->

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Products</h3>
                    <a href="{{url('product/create')}}" class="btn btn-outline-primary float-right" alt="Add Category"><i class="fa fa-plus"></i></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($products as $product)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$product->categories->cat_name}}</td>
                                <td>{{$product->brands->brand_name}}</td>
                                <td>{{$product->pro_name}}</td>
                                <td><img src="{{asset($product->pro_image)}}" alt="" height="50"></td>
                                <td>{{$product->pro_price}}</td>
                                <td>{{$product->status == 1? 'Published':'Unpublished'}}</td>
                                <td>
                                    <a href="{{ url('product/'.$product->id) }}" class="btn btn-sm btn-outline-secondary">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                    @if($product->status == 1)
                                        <a href="{{route('unpublished-product',['id'=>$product->id])}}" class="btn btn-sm btn-info" onclick="return confirm('Do you really want to change to Unpublish?')">
                                            <i class="fa fa-arrow-up"></i>
                                        </a>
                                    @else
                                        <a href="{{route('published-product',['id'=>$product->id])}}" class="btn btn-sm btn-warning" onclick="return confirm('Do you really want to change to Publish?')">
                                            <i class="fa fa-arrow-down"></i>
                                        </a>
                                    @endif
                                    <a href="{{url('product/'.$product->id.'/edit')}}" class="btn btn-sm btn-success">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{url('product/'.$product->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Do you really want to Delete?');
                                    event.preventDefault();
                                       document.getElementById('delete-form').submit();">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form id="delete-form" action="{{ url('product/'.$product->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @METHOD('delete')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Sl.</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
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
