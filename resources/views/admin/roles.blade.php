@extends("layouts.admin-layout")
@section("title","Roles")
@section("page-title","Roles")
@section("roles","current")
@section("page-content")
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">Roles</h4>
                    <!-- /.box-title -->

                    <div class="form-group margin-bottom-100">
                        <div class="col-sm-10">
										<span data-remodal-target="remodal"
                                              class="btn btn-info btn-sm waves-effect waves-light">Add Role</span>
                        </div>
                    </div>

                    <!-- /.dropdown js__dropdown -->
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Role Name</th>
                            <th>Permissions</th>
                            <th>Created at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $id = 1; ?>
                        @foreach($roles as $role)
                            <tr>
                                <td>{!! $id !!}</td>
                                <td>{!! $role->role !!}</td>
                                <td>@foreach($role->permissions as $permission) <span style="background-color: #0c5460; margin-top:15px; padding-left:5px; padding-right: 5px; color: #ffffff; border-radius: 5px;">{!! $permission->permission !!}</span> @endforeach</td>
                                <td>{!! $role->created_at !!}</td>
                                <td>
                                    <a href="{!! route("admin.roles.edit",$role->id) !!}">Edit</a> <br/>
                                    <a href="javascript:void(0)" onclick="confirmRoleDelete('{!! $role->id !!}')">Delete</a> <br/>
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

        <form method="post" action="{!! route("admin.roles.create") !!}">
            @csrf
            <div class="remodal-content">
                <h2 id="modal1Title">Create Role</h2>
                <label for="role" class="col-sm-12 control-label">Role Name</label>
                <input type="text" name="role" required="required" class="form-control">
                <br/>

                <label for="inputEmail3" class="col-sm-12 control-label">Permissions</label>
                @foreach(helper::instance()->appOperations() as $operation)
                    <span>{!! $operation !!} </span> <input type="checkbox" name="permissions[]" value="{!! $operation !!}">
                    <br/>
                @endforeach
            </div>
            <br/>

            <span data-remodal-action="cancel" class="remodal-cancel" >Cancel</span>
            <button class="remodal-confirm">Submit
            </button>
        </form>
    </div>

    <div class="remodal" data-remodal-id="delete-role" role="dialog"
         aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close"
                aria-label="Close"></button>


        <form method="post" action="{!! route("admin.role.delete") !!}">
            @csrf
            <div class="remodal-content">
                <h2 id="modal1Title">Delete Role</h2>
                <h3 class="text-danger">Role and permissions would be permanently deleted.</h3>
                <br/>
                <input type="number" name="role_id" hidden>
            </div>
            <span data-remodal-action="cancel" class="remodal-cancel">Cancel</span>
            <button class="remodal-confirm">Proceed Delete
            </button>
        </form>
    </div>


@endsection
@section("page-script")
    <script>
        function confirmRoleDelete($role){
            $("input[name='role_id']").val($role);

            window.location.href = "#delete-role";
        }
    </script>
@endsection
