@extends('backend.layouts.app')
@section('content')
    <div class="wrapper">
       <!-- Content Wrapper. Contains page content -->
       <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Edit Profile
                <small>Preview</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Edit user Profile</a></li>
                <li class="active">user Profile</li>
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
                            <h3 class="box-title">profile setting manage</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form action="{{ route('updateuserprofile', @$item->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{ @$item->id }}"><br>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">User Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="username" value="{{ @$item->username }}" placeholder="username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fullname</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="name" value="{{ @$item->name }}" placeholder="fullname">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="email" value="{{ @$item->email }}" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Profile pic</label>
                                    <input type="file" name="profilepic" placeholder="profilepic"><br>
                                    <img width="80px" height="50px" src="{{ url('' . @$item->profilepic . '') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1"
                                        name="password" value="{{ @$item->password }}" placeholder="password">
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
              <h5 class="modal-title" id="exampleModalLabel"><H2>User Profile <H2></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form action="{{ route('storeuserprofile') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">username</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="username"
                          aria-describedby="emailHelp" placeholder="username">
                  </div>
                  <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Fullname</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="fullname"
                          aria-describedby="emailHelp" placeholder="fullname">
                  </div>
                  <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                          aria-describedby="emailHelp" placeholder="email">
                  </div>
                  <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Profile pic</label>
                      <input type="file" name="profilepic" placeholder="profilepic"><br>
                  </div>
                  <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Password</label>
                      <input type="password" class="form-control" id="exampleInputEmail1" name="password"
                          aria-describedby="emailHelp" placeholder="password">
                  </div>
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
