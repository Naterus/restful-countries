@extends("layouts.admin-layout")
@section("title","Country")
@section("page-title","Covid update")
@section("countries","Covid Update")
@section("page-style")
    <link rel="stylesheet" href="{!! asset("storage/users/plugin/toastr/toastr.css") !!}">
@endsection
@section("page-content")
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-lg-12 col-xs-12">
                <div class="box-content">
                    <h4 class="box-title"><a href="{!! route("admin.countries") !!}">Countries</a> / <a href="{!! route("admin.countries.edit",$covid->country->id) !!}" >{!! $covid->country->name !!}</a>  / Covid 19</h4>
                    <div class="card-content">
                        <form method="post" class="form-horizontal" action="{!! route("admin.covid19.update",$covid->country->id) !!}">
                            @csrf
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Total Case</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="number" name="total_case"  required="required" class="form-control" value="{!! $covid->total_case !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Total Deaths</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="number" name="total_deaths"  required="required" class="form-control" value="{!! $covid->total_deaths !!}">
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
