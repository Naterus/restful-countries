@extends("layouts.admin-layout")
@section("title","Country")
@section("page-title","Country")
@section("countries","current")
@section("page-style")
    <link rel="stylesheet" href="{!! asset("storage/users/plugin/toastr/toastr.css") !!}">
@endsection
@section("page-content")
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-lg-12 col-xs-12">
                <div class="box-content">
                    <h4 class="box-title"><a href="{!! route("admin.countries") !!}">Countries</a> / <a href="{!! route("admin.countries.edit",$country->id) !!}" >{!! $country->name !!}</a>  / <a href="{!! route("admin.presidents",$country->id) !!}">Presidents</a> / {!! $president->name !!}</h4>
                    <div class="card-content">
                        <form class="form-horizontal" action="{!! route("admin.presidents.edit.update",["country"=>$country->id,"president"=>$president->id]) !!}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="number" hidden="hidden"id="inputEmail3" name="id" value="{!! $president->id !!}">

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" name="name"  required="required" class="form-control" value="{!! $president->name !!}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Gender</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <select class="form-control" name="gender">
                                        <option value="{!! $president->gender !!}" >{!! $president->gender !!}</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Change Picture (Optional)</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="file" name="picture" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Appointment Start Date</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="date" name="appointment_start_date" class="form-control" value="{!! $president->appointment_start_date !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Appointment End Date</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="date" name="appointment_end_date" class="form-control" value="{!! $president->appointment_end_date !!}">
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
