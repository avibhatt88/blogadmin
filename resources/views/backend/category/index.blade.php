@extends('backend.layouts.app')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Categories list
                    <small>Preview</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Forms</a></li>
                    <li class="active">Categories</li>
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
                                <h3 class="box-title">Create categories</h3>&nbsp;
                                <a class="btn btn-success" href="{{ route('categorycreate') }}"> Create categories</a>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <table class="table table-bordered">
                                <tr>
                                    <th>S.No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th width="280px">Action</th>
                                </tr>
                                @foreach ($categorys as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            <a class="btn btn-primary"
                                                href="{{ route('editcategory', $item->id) }}">update</a>
                                            <a class="btn btn-danger"
                                                href="{{ route('deletecategory', $item->id) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>   
@endsection
