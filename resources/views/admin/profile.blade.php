@extends("layouts.admin-layout")
@section("title","Profile")
@section("page-title","Profile")
@section("profile","current")
@section("page-style")
    <link rel="stylesheet" href="{!! asset("storage/users/plugin/toastr/toastr.css") !!}">
@endsection
@section("page-content")
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-lg-12 col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">Profile </h4>
                    <div class="card-content">
                        <form class="form-horizontal" action="{!! route("admin.profile.update") !!}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" name="name" disabled class="form-control" value="{!! Auth::user()->email !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Role</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" disabled class="form-control" value="{!! Auth::user()->role->role !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Old Password</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="password" name="old_password" required="required" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">New Password</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="password" name="password" required="required" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Confirm New Password</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="password" name="password_confirmation" required="required" class="form-control" >
                                </div>
                            </div>


                            <div class="form-group margin-bottom-0">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-info btn-sm waves-effect waves-light">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-content -->
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-lg-12 col-xs-12 -->
        </div>

    </div>
    <!-- /.main-content -->
@endsection
