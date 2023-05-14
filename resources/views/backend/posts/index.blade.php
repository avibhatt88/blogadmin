@extends('backend.layouts.app')
@section('content')
    <div class="wrapper">
           <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                post list
                <small>Preview</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">General Elements</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Create Post </h3>
                            <a class="btn btn-success" href="{{ route('postcreate') }}">Create Post</a>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>title</th>
                                    <th>description</th>
                                    <th>keyword</th>
                                    <th>category</th>
                                    <th>image</th>
                                    <th width="280px">Action</th>
                                </tr>
                                @foreach ($posts as $item)
                                    <tr>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->keyword }}</td>
                                        <td>{{ ktCategoryName($item->category_id) }}</td>
                                        <td><img width="80px" height="50px" src="{{ url('' . $item->image . '') }}">
                                        </td>
                                        <td>
                                            <a class="btn btn-primary"
                                                href="{{ route('editpost', $item->id) }}">update</a>
                                            <a class="btn btn-danger"
                                                href="{{ route('deletepost', $item->id) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
