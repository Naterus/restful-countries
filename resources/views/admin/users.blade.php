@extends("layouts.admin-layout")
@section("title","Countries")
@section("page-title","Users")
@section("users","current")
@section("page-style")
    <!-- Data Tables -->
    <link rel="stylesheet" href="{!! asset('storage/users/plugin/datatables/media/css/dataTables.bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('storage/users/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset("storage/users/plugin/modal/remodal/remodal.css") !!}">
    <link rel="stylesheet" href="{!! asset("storage/users/plugin/modal/remodal/remodal-default-theme.css") !!}">
    <link rel="stylesheet" href="{!! asset("storage/users/plugin/toastr/toastr.css") !!}">
@endsection
@section("page-content")
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">Users</h4>
                    <!-- /.box-title -->
                    <div class="form-group margin-bottom-100">
                        <div class="col-sm-10">
										<span data-remodal-target="remodal"
                                              class="btn btn-info btn-sm waves-effect waves-light">Add User</span>
                        </div>
                    </div>

                    <!-- /.dropdown js__dropdown -->
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $id = 1; ?>
                        @foreach($users as $user)
                            <tr>
                                <td>{!! $id !!}</td>
                                <td>{!! $user->name !!}</td>
                                <td>{!! $user->email !!}</td>
                                <td>{!! $user->role->role !!}</td>
                                <td>@if($user->status == 1) <span class="text-success">Active</span> @else <span class="text-danger">Inactive</span> @endif</td>
                                <td>{!! $user->created_at!!}</td>
                                <td>
                                    <a href="">Edit</a> <br/>
                                    <!--
                                    <a href="">Delete</a><br/>
                                    -->
                                    <!-- /.dropdown js__dropdown -->
                                </td>
                            </tr>
                            <?php $id++; ?>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="remodal" data-remodal-id="remodal" role="dialog"
         aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close"
                aria-label="Close"></button>


        <form method="post" action="{!! route("admin.users.create") !!}">
            @csrf
            <div class="remodal-content">
                <h2 id="modal1Title">Create User</h2>
                <label for="inputEmail3" class="col-sm-12 control-label">Full Name (Optional)</label>
                <input type="text" name="name" required="required" class="form-control">
                <br/>

                <label for="inputEmail3" class="col-sm-12 control-label">Email Address</label>
                <input type="text" name="email" required="required" class="form-control">
                <br/>

                <label for="inputEmail3" class="col-sm-12 control-label">Role</label>
                <select name="role" class="form-control" required>
                    <option selected disabled>Select Role</option>
                    @foreach($roles as $role)
                         <option value="{!! $role->id !!}">{!! $role->role !!}</option>
                    @endforeach
                </select>
                <br/>

                <label for="inputEmail3" class="col-sm-12 control-label">Password</label>
                <input type="password" name="password" required="required" class="form-control">
                <br/>

            </div>
            <br/>

            <span data-remodal-action="cancel" class="remodal-cancel" >Cancel</span>
            <button class="remodal-confirm">Submit
            </button>
        </form>
    </div>


@endsection
@section("page-script")
    @if(Session::has("success"))
        <script>
            Command: toastr["success"]("{!! Session::get("success") !!}", "Success")

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "rtl": false,
                "positionClass": "toast-top-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": 300,
                "hideDuration": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000,
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        </script>
    @endif
    @if(Session::has("error"))
        <script>
            Command: toastr["error"]("{!! Session::get("error") !!}", "Error")

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "rtl": false,
                "positionClass": "toast-top-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": 300,
                "hideDuration": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000,
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        </script>
    @endif
@endsection
