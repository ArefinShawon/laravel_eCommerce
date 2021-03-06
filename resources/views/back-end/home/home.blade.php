@extends('back-end.master')
@section('title')
    Admin Panel | Home
@endsection
@section('body')
    <div class="wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->

            <!-- Default box -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Dashboard</h1>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-lg-4 col-6">
                                <!-- small box -->
                                <div class="small-box bg-gradient-secondary">
                                    <div class="inner">
                                        <h3>150</h3>
                                        <a href="{{url('brand')}}" class="text-white">Brand</a>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-4 col-6">
                                <!-- small box -->
                                <div class="small-box bg-gradient-success">
                                    <div class="inner">
                                        <h3>150</h3>
                                        <a href="{{route('admin-category')}}" class="text-white">Category</a>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-4 col-6">
                                <!-- small box -->
                                <div class="small-box bg-gradient-info">
                                    <div class="inner">
                                        <h3>150</h3>
                                        <a href="" class="text-white">Users</a>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                        <!-- Main row -->
                        <div class="row">
                            <!-- Left col -->
                            <section class="col-lg-7 connectedSortable">
                                <!-- TO DO List -->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="ion ion-clipboard mr-1"></i>
                                            To Do List
                                        </h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-info btn-sm" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>

                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <ul class="todo-list" data-widget="todo-list">
                                            <li>
                                                <!-- drag handle -->
                                                <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                                                <!-- checkbox -->
                                                <div  class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                                    <label for="todoCheck1"></label>
                                                </div>
                                                <!-- todo text -->
                                                <span class="text">Design a nice theme</span>
                                                <!-- Emphasis label -->
                                                <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                                                <!-- General tools such as edit or delete-->
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash-o"></i>
                                                </div>
                                            </li>
                                            <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                                                <div  class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                                                    <label for="todoCheck2"></label>
                                                </div>
                                                <span class="text">Make the theme responsive</span>
                                                <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash-o"></i>
                                                </div>
                                            </li>
                                            <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                                                <div  class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                                    <label for="todoCheck3"></label>
                                                </div>
                                                <span class="text">Let theme shine like a star</span>
                                                <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash-o"></i>
                                                </div>
                                            </li>
                                            <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                                                <div  class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo4" id="todoCheck4">
                                                    <label for="todoCheck4"></label>
                                                </div>
                                                <span class="text">Let theme shine like a star</span>
                                                <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash-o"></i>
                                                </div>
                                            </li>
                                            <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                                                <div  class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo5" id="todoCheck5">
                                                    <label for="todoCheck5"></label>
                                                </div>
                                                <span class="text">Check your messages and notifications</span>
                                                <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash-o"></i>
                                                </div>
                                            </li>
                                            <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                                                <div  class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo6" id="todoCheck6">
                                                    <label for="todoCheck6"></label>
                                                </div>
                                                <span class="text">Let theme shine like a star</span>
                                                <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash-o"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer clearfix">
                                        <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add item</button>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </section>
                            <!-- /.Left col -->
                            <!-- right col (We are only adding the ID to make the widgets sortable)-->
                            <section class="col-lg-5 connectedSortable">
                             <!-- Calendar -->
                                <!-- Calendar -->
                                <div class="card bg-gradient-success">
                                    <div class="card-header border-0">

                                        <h3 class="card-title">
                                            <i class="far fa-calendar-alt"></i>
                                            Calendar
                                        </h3>
                                        <!-- tools card -->
                                        <div class="card-tools">
                                            <!-- button with a dropdown -->
                                            <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                        <!-- /. tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body pt-0">
                                        <!--The calendar -->
                                        <div id="calendar" style="width: 100%"></div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                                <!-- /.card -->
                            </section>
                            <!-- right col -->
                        </div>
                        <!-- /.row (main row) -->
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.card -->

        <!-- /.content -->
    </div>
@endsection
