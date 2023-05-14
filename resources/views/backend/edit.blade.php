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
                <li class="active">web setting</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Web setting manage</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form action="{{ route('updatedata', @$item->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{ @$item->id }}"><br>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Site_Title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="site_title" value="{{ @$item->site_title }}" placeholder="text">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="description" value="{{ @$item->description }}" placeholder="text">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Keywords</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="keywords" value="{{ @$item->keywords }}" placeholder="text">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Logo</label>
                                    <input type="file" name="logo" placeholder="profilepic"><br>
                                    <img width="80px" height="50px" src="{{ url('' . @$item->logo . '') }}">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Favicon</label>
                                    <input type="file" name="favicon" placeholder="profilepic"><br>
                                    <img width="80px" height="50px" src="{{ url('' . @$item->favicon . '') }}">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Header script</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="header_script" value="{{ @$item->header_script }}" placeholder="text">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Footer script</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="footer_script" value="{{ @$item->footer_script }}" placeholder="text">
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-warning">update</button>
                            </div>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                CLICK 
                            </button>
                        </form>
                    </div>    
                </div>
            </section>
        </div>
    </div>   
     <!-- Modal -->

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><H2>Web setting<H2></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form action="{{ route('storedata') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Site_title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="site_title"
                          aria-describedby="emailHelp" placeholder="text">
                  </div>
                  <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="description"
                          aria-describedby="emailHelp" placeholder="text">
                  </div>
                  <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Keywords</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="keywords"
                          aria-describedby="emailHelp" placeholder="text">
                  </div>
                  <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Logo</label>
                      <input type="file" name="logo" placeholder="profilepic"><br>
                  </div>
                  <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Favicon</label>
                      <input type="file" name="favicon" placeholder="profilepic"><br>
                  </div>
                  <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Header_script</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="header_script"
                          aria-describedby="emailHelp" placeholder="text">
                  </div>
                  <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Footer_script</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="footer_script"
                          aria-describedby="emailHelp" placeholder="text">
                  </div><br>
                  <button type="submit" class="btn btn-success">Add</button>
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>
@endsection

