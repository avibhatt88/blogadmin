@extends('backend.layouts.app')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    POST SETTING
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
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form method="POST" action="{{route('storepost')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="card card-primary">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="title">Post Title </label>
                                                    <input type="text" name="title" id="title" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Post Description</label>
                                                    <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="keyword">Post keyword</label>
                                                    <textarea id="keyword" name="keyword" class="form-control" rows="4"required ></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Slug</label>
                                                    <input type="text" name="slug" id="title" class="form-control" required>
                                                </div>
                                                <div class="form-group"><br>
                                                    <label for="image">Post Image</label>
                                                    <input type="file" name="image" class="form-control-file" id="image" required>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-secondary">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="category">Category</label>
                                                    <select id="category" name="category_id" class="form-control custom-select">
                                                        <option selected disabled>Select one</option>
                                                        @foreach ($categorys as $item)
                                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                                <center><input type="submit" value="Create" class="btn btn-success float-right"></center>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

