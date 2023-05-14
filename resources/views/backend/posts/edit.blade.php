@extends('backend.layouts.app')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Web Setting
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
                            <form action="{{ route('updatepost', $item->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="card card-primary">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="{{ $item->id }}"><br>
                                                </div>
                                                <div class="form-group">
                                                    <label for="title">Post Title </label>
                                                    <input type="text" name="title" id="title" class="form-control"
                                                        required value="{{ $item->title }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Post Description</label>
                                                    {{-- <textarea id="description" name="description" class="form-control" value="{{ $item->description}}"  required ></textarea> --}}
                                                    <input type="text" name="description" id="title"
                                                        class="form-control" value="{{ $item->description }}" required>

                                                </div>
                                                <div class="form-group">
                                                    <label for="keyword">Post keyword</label>
                                                    {{-- <textarea id="keyword" name="keyword" class="form-control"  value="{{ $item->keyword}}"  required ></textarea> --}}
                                                    <input type="text" name="keyword" id="title" class="form-control"
                                                        value="{{ $item->keyword }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Slug</label>
                                                    <input type="text" name="slug" id="title" class="form-control"
                                                        value="{{ $item->slug }}" width="180px" height="150px" required>
                                                </div><br>

                                                <div class="form-group">
                                                    <label for="image">Post Image</label>
                                                    <input type="file" name="image" class="form-control-file"
                                                        id="image"><br>
                                                    <img width="180px" height="150px"
                                                        src="{{ url('' . $item->image . '') }}">
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-secondary">
                                            <div class="card-body"><br> <br>
                                                <div class="form-group">
                                                    <label for="category">Category</label>
                                                    <select id="category" name="category_id"
                                                        class="form-control custom-select">
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
                                <div class="row" style="content:center">
                                   <div class="col-12">
                                        <a href="#" class="btn btn-secondary">Cancel</a>
                                        <input type="submit" value="Update" class="btn btn-warning float-right">
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
