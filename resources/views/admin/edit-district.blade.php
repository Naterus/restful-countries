@extends("layouts.admin-layout")
@section("title","Edit District")
@section("page-title","Edit District")
@section("countries","current")
@section("page-style")
    <link rel="stylesheet" href="{!! asset("storage/users/plugin/toastr/toastr.css") !!}">
@endsection
@section("page-content")
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-lg-12 col-xs-12">
                <div class="box-content">
                    <h4 class="box-title"><a href="{!! route("admin.countries") !!}">Countries</a> / <a href="{!! route('admin.countries.edit',$district->country_id) !!}">{!! $district->state($district->country_id)->country->name !!}</a> / <a href="{!! route("admin.states",$district->country_id) !!}"> States </a> / <a href="{!! route("admin.states.edit",["country"=>$district->country_id, "state" => $district->state_id]) !!}">{!! $district->state($district->country_id)->name !!}</a>  /  <a href="{!! route("admin.districts",["country"=>$district->country_id, "state" => $district->state_id,"district" => $district->id]) !!}"> Disticts </a> /  {!! $district->name !!} </h4>                    <div class="card-content">
                        <form class="form-horizontal" action="{!! route("admin.districts.edit.update",["country" => $district->country_id,"state"=>$district->state_id,"district"=>$district->id]) !!}" method="post">
                            @csrf
                            <input type="number" hidden="hidden"id="inputEmail3" name="id" value="{!! $district->id !!}">

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" name="name" required="required" class="form-control" value="{!! $district->name !!}">
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
