@extends("layouts.admin-layout")
@section("title","Covid Update")
@section("page-title","Covid update")
@section("countries","current")
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
                        <div class="row">
                            <span class="col-sm-2"></span>
                            <div class="col-sm-6">
                        <span data-remodal-target="covid-upload"
                              class="btn btn-info btn-sm waves-effect waves-light" style="margin-bottom: 30px;">Import from CSV</span>
                            </div>
                        </div>
                        <form method="post" class="form-horizontal" action="{!! route("admin.covid19.update",$covid->country->id) !!}">
                            @csrf
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Last Updated</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text"  class="form-control" value="{!! $covid->updated_at !!}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Last Updated By</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text"  class="form-control" value="{!! $covid->user->name !!}" disabled>
                                </div>
                            </div>
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

    @if(helper::instance()->isPermitted("UPDATE COVID19"))
        <div class="remodal" data-remodal-id="covid-upload" role="dialog"
             aria-labelledby="modal1Title" aria-describedby="modal1Desc">
            <button data-remodal-action="close" class="remodal-close"
                    aria-label="Close"></button>


            <form method="post" action="{!! route("admin.covid19.import",$covid->country->id) !!}" enctype="multipart/form-data">
                @csrf
                <div class="remodal-content">
                    <h2 id="modal1Title">Import Covid-19 Data from CSV File</h2>
                    <label for="inputEmail3" class="col-sm-12 control-label">Csv file</label>
                    <input type="file" name="covid_csv" class="form-control">
                    <br/>
                </div>
                <span data-remodal-action="cancel" class="remodal-cancel">Cancel</span>
                <button class="remodal-confirm">Import
                </button>
            </form>
        </div>
    @endif
@endsection
@section("page-script")
@endsection
