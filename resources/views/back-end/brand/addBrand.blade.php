@extends('back-end.master')

@section('title')
    Admin Panel | Add Brand
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
                                <h3 class="card-title">Add Brand</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            {{ Form::open(['url' => 'brand','enctype'=>'multipart/form-data']) }}
                            <div class="card-body">
                                <div class="form-group">
                                {{ Form::label('Brand Name') }}
                                    {{ Form::text('brand_name','',['class'=>'form-control','placeholder'=>'Enter Brand name']) }}
                                </div>
                                <div class="form-group">
                                {{ Form::label('Brand Description') }}
                                    {{ Form::text('brand_desc','',['class'=>'form-control','placeholder'=>'Enter brand description']) }}
                                </div>
                                <div class="form-group">
                                {{ Form::label('Brand Image') }}
                                    {{ Form::file('brand_image',['class'=>'form-control-file']) }}
                                </div>
                                <div class="form-group">
                                {{ Form::label('Publication Status') }}
                                    {{ Form::select('status',[''=>'--Select publication status--','1'=>'Published', '0'=>'Unpublished'],null,['class'=>'form-control']) }}
                                </div>
                                <div class="form-group">
                                {{ Form::submit('Add Brand',['class'=>'btn btn-primary']) }}

                                </div>
                            </div>
                            {{ Form::close() }}

                        </div>
                        <!-- /.card -->
                        <a href="{{url('brand')}}" class="fa fa-arrow-circle-left"> Return to Brand</a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
