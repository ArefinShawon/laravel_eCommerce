@extends('back-end.master')
@section('title')
    Admin Panel | Edit Category
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
                                <h3 class="card-title">Edit Category</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{route('update-category')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input type="text" class="form-control" value="{{$category->cat_name}}" name="cat_name" placeholder="Enter Category Name">
                                        <input type="hidden" class="form-control" value="{{$category->id}}" name="id">
                                    </div>
                                    <div class="form-group">
                                        <label>Category Description</label>
                                        <input type="text" class="form-control" value="{{$category->cat_desc}}" name="cat_desc" placeholder="Enter Category Description">
                                    </div>
                                    <div class="form-group">
                                        <label>Publication Status</label>
                                        <select name="status" class="form-control">
                                            <option>--Select Publication Status--</option>
                                            <option value="1" {{$category->status ==1? 'Selected': ''}}>Published</option>
                                            <option value="0" {{$category->status==0? 'Selected': ''}}>Unpublished</option>
                                        </select>
                                    </div>
                                    <!-- /.card-body -->
                                    <button type="submit" class="btn btn-primary">Update Category</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
