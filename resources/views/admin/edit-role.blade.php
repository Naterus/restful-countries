@extends("layouts.admin-layout")
@section("title","Edit Role")
@section("page-title","Edit Role")
@section("roles","current")
@section("page-style")
    <link rel="stylesheet" href="{!! asset("storage/users/plugin/toastr/toastr.css") !!}">
@endsection
@section("page-content")
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-lg-12 col-xs-12">
                <div class="box-content">
                    <h4 class="box-title"><a href="{!! route("admin.roles") !!}">Roles</a> / {!! $role->role !!}</h4>
                    <div class="card-content">
                        <form class="form-horizontal" action="{!! route("admin.roles.edit.update",$role->id) !!}" method="post">
                            @csrf
                            <input type="number" hidden="hidden"id="inputEmail3" name="id" value="{!! $role->id !!}">

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Role Name</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" name="role" required="required" class="form-control" value="{!! $role->role !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Permissions</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    @foreach(helper::instance()->appOperations() as $operation)
                                      <span> {!! $operation !!} </span> <input type="checkbox" name="permissions[]" value="{!! $operation !!}" @foreach($role->permissions as $permission) @if($permission->permission == $operation) checked @endif @endforeach>
                                      <br/>
                                    @endforeach
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
@section("page-script")

@endsection
