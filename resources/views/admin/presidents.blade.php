@extends("layouts.admin-layout")
@section("title","Presidents")
@section("page-title","Presidents")
@section("countries","current")
@section("page-style")
    <!-- Data Tables -->
    <link rel="stylesheet" href="{!! asset('storage/users/plugin/datatables/media/css/dataTables.bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('storage/users/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css') !!}">
    <!-- Remodal -->
    <link rel="stylesheet" href="{!! asset("storage/users/plugin/modal/remodal/remodal.css") !!}">
    <link rel="stylesheet" href="{!! asset("storage/users/plugin/modal/remodal/remodal-default-theme.css") !!}">
@endsection
@section("page-content")
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-xs-12">
                <div class="box-content">
                    <h4 class="box-title"><a href="{!! route("admin.countries") !!}">Countries</a> / <a href="{!! route('admin.countries.edit',$country->id) !!}">{!! $country->name !!}</a> / Presidents</h4>
                    <!-- /.box-title -->
                    @if(helper::instance()->isPermitted("CREATE PRESIDENT"))
                        <div class="form-group margin-bottom-100">
                            <div class="col-sm-10">
										<span data-remodal-target="remodal"
                                              class="btn btn-info btn-sm waves-effect waves-light">Add President</span>
                            </div>
                        </div>
                @endif
                <!-- /.dropdown js__dropdown -->
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $id = 1; ?>
                        @foreach($presidents as $president)
                            <tr>
                                <td>{!! $id !!}</td>
                                <td><img src="{!! asset("storage/images/presidents/".$president->picture) !!}" style="height: 50px; width: 50px;"></td>
                                <td>{!! $president->name !!}</td>
                                <td>{!! $president->gender !!}</td>
                                <td>{!! $president->appointment_start_date !!}</td>
                                <td>{!! $president->appointment_end_date !!}</td>
                                <td>
                                    @if(helper::instance()->isPermitted("UPDATE PRESIDENT"))
                                        <a href="{!! route("admin.presidents.edit",["country" => $president->country_id,"president"=>$president->id]) !!}">Edit</a> <br/>
                                    @endif
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

    @if(helper::instance()->isPermitted("CREATE PRESIDENT"))
        <div class="remodal" data-remodal-id="remodal" role="dialog"
             aria-labelledby="modal1Title" aria-describedby="modal1Desc">
            <button data-remodal-action="close" class="remodal-close"
                    aria-label="Close"></button>


            <form method="post" action="{!! route("admin.presidents.create",$country->id) !!}" enctype="multipart/form-data">
                @csrf
                <div class="remodal-content">
                    <h2 id="modal1Title">Create President</h2>
                    <label for="inputEmail3" class="col-sm-12 control-label">Full Name</label>
                    <input type="text" name="name" required="required" class="form-control">
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Gender</label>
                    <select name="gender" required="required" class="form-control">
                        <option value=""  selected disabled>-------------</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Picture (Optional)</label>
                    <input type="file" name="picture" class="form-control">
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Appointment Start Date</label>
                    <input type="date" name="appointment_start_date" required="required" class="form-control">
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Appointment End Date</label>
                    <input type="date" name="appointment_end_date" class="form-control">
                    <br/>

                </div>
                <!-- 									<input type="text" th:value="${user.id}" th:field="${user.id}" hidden="hidden">  -->
                <span data-remodal-action="cancel" class="remodal-cancel">Cancel</span>
                <button class="remodal-confirm">Submit
                </button>
            </form>
        </div>
    @endif

@endsection
@section("page-script")

@endsection
