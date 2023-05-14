@extends('backend.layouts.app')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    web setting
                    <small>Preview</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Forms</a></li>
                    <li class="active">web setting</li>
                </ol>
            </section>
            <table class="table table-bordered">
                <tr>
                    <th>Site_title</th>
                    <th>Description</th>
                    <th>keywords</th>
                    <th>Logo</th>
                    <th>Favicon</th>
                    <th>Header_script</th>
                    <th>Footer_script</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($websettings as $item)
                    <tr>
                        <td>{{ $item->site_title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->keywords }}</td>
                        <td><img width="80px" height="50px" src="{{ url('' . $item->logo . '') }}"></td>
                        <td><img width="80px" height="50px" src="{{ url('' . $item->favicon . '') }}"></td>
                        <td>{{ $item->header_script }}</td>
                        <td>{{ $item->footer_script }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('editdata', $item->id) }}">update</a>
                            <a class="btn btn-danger" href="{{ route('deletedata', $item->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>        
            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalnew">
                CLICK 
            </button> --}}
        </div>
    </div>   
@endsection

