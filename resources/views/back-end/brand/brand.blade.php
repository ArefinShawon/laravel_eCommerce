@extends('back-end.master')
@section('title')
    Admin Panel | Brand
@endsection
@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                @if(Session::get('message'))
                    <div class="alert alert-default-success">
                        <h6>{{Session::get('message')}}</h6>
                        {{--                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                        {{--                            <span aria-hidden="true">&times;</span>--}}
                        {{--                        </button>--}}
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
                    <h3 class="card-title">Brand</h3>
                    <a href="{{route('brand.create')}}" class="btn btn-outline-primary float-right" alt="Add Category"><i class="fa fa-plus"></i></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Brand Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$brand->brand_name}}</td>
                                <td>{{$brand->brand_desc}}</td>
                                <td><img src="{{asset($brand->brand_image)}}" alt="" height="50"></td>
                                <td>{{$brand->status == 1? 'Published':'Unpublished'}}</td>
                                <td>
                                    @if($brand->status == 1)
                                        <a href="{{route('unpublished-brand',['id'=>$brand->id])}}" class="btn btn-sm btn-info" onclick="return confirm('Do you really want to change to Unpublish?')">
                                            <i class="fa fa-arrow-up"></i>
                                        </a>
                                    @else
                                        <a href="{{route('published-brand',['id'=>$brand->id])}}" class="btn btn-sm btn-warning" onclick="return confirm('Do you really want to change to Publish?')">
                                            <i class="fa fa-arrow-down"></i>
                                        </a>
                                    @endif
                                    <a href="{{url('brand/'.$brand->id.'/edit')}}" class="btn btn-sm btn-success">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{url('brand/'.$brand->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Do you really want to Delete?');
                                    event.preventDefault();
                                       document.getElementById('delete-form').submit();">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                        <form id="delete-form" action="{{ url('brand/'.$brand->id) }}" method="POST" style="display: none;">
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
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Brand Image</th>
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
