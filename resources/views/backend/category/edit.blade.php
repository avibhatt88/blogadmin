@extends('backend.layouts.app')
@section('content')
    <div class="wrapper">
        <-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Category Setting
                        <small>Preview</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">categories</li>
                    </ol>
                </section>
                <!-- Main content -->
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Edit Categories </h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form action="{{ route('updatecategory', $item->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="{{ $item->id }}"><br>
                                                </div>
                                                <div class="form-group">
                                                    <label for="title">Category Title </label>
                                                    <input type="text" name="title" id="title" class="form-control"
                                                        value="{{ $item->title }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="excerpt">Category Description</label>
                                                    <input type="text" name="description" id="title"
                                                        class="form-control" value="{{ $item->description }}" required>
                                                </div>
                                            </div>
                                            <input type="submit" value="Update" class="btn btn-primary float-right">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
    </div>
@endsection
