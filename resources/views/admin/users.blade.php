@extends("layouts.admin-layout")
@section("title","Countries")
@section("page-title","Users")
@section("users","current")
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
                                    <a href="javascript:void(0)" onclick="confirmUserDelete('{!! $user->id !!}')">Delete</a> <br/>
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

    <div class="remodal" data-remodal-id="delete-user" role="dialog"
         aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close"
                aria-label="Close"></button>


        <form method="post" action="{!! route("admin.user.delete") !!}">
            @csrf
            <div class="remodal-content">
                <h2 id="modal1Title">Delete User</h2>
                <h3 class="text-danger">User would be permanently deleted.</h3>
                <br/>
                <input type="number" name="user" hidden>
            </div>
            <span data-remodal-action="cancel" class="remodal-cancel">Cancel</span>
            <button class="remodal-confirm">Proceed Delete
            </button>
        </form>
    </div>


@endsection
@section("page-script")
    <script>
        function confirmUserDelete($user){
            $("input[name='user']").val($user);

            window.location.href = "#delete-user";
        }
    </script>
@endsection
