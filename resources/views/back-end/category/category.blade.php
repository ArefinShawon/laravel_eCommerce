@extends('back-end.master')
@section('title')
    Admin Panel | Category
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
                    <h3 class="card-title">Category</h3>
                    <a href="{{route('add-category')}}" class="btn btn-outline-primary float-right" alt="Add Category"><i class="fa fa-plus"></i></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$category->cat_name}}</td>
                            <td>{{$category->cat_desc}}</td>
                            <td>{{$category->status == 1? 'Published':'Unpublished'}}</td>
                            <td>
                                @if($category->status == 1)
                                <a href="{{route('unpublished-category',['id'=>$category->id])}}" class="btn btn-sm btn-info" onclick="return confirm('Do you really want to change to Unpublish?')">
                                    <i class="fa fa-arrow-up"></i>
                                </a>
                                @else
                                    <a href="{{route('published-category',['id'=>$category->id])}}" class="btn btn-sm btn-warning" onclick="return confirm('Do you really want to change to Publish?')">
                                        <i class="fa fa-arrow-down"></i>
                                    </a>
                                @endif
                                <a href="{{route('edit-category',['id'=>$category->id])}}" class="btn btn-sm btn-success">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('delete-category',['id'=>$category->id ])}}" class="btn btn-sm btn-danger" onclick="return confirm('Do you really want to Delete?')">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Sl.</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
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
