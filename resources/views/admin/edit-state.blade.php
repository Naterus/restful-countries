@extends("layouts.admin-layout")
@section("title","Edit State")
@section("page-title","Edit State")
@section("countries","current")
@section("page-style")
    <link rel="stylesheet" href="{!! asset("storage/users/plugin/toastr/toastr.css") !!}">
@endsection
@section("page-content")
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-lg-12 col-xs-12">
                <div class="box-content">
                    <h4 class="box-title"><a href="{!! route("admin.countries") !!}">Countries</a> / <a href="{!! route('admin.countries.edit',$state->country_id) !!}">{!! $state->country->name !!}</a> / <a href="{!! route('admin.states',$state->country_id) !!}">States</a> / {!! $state->name !!}</h4>
                    <div class="card-content">
                        <form class="form-horizontal" action="{!! route("admin.states.edit.update",["country" => $state->country_id,"state"=>$state->id]) !!}" method="post">
                            @csrf
                            <input type="number" hidden="hidden"id="inputEmail3" name="id" value="{!! $state->id !!}">

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" name="name" required="required" class="form-control" value="{!! $state->name !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">Nick Name</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" name="nick_name" class="form-control" value="{!! $state->nick_name !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">Slogan</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" name="slogan" class="form-control" value="{!! $state->slogan !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">ISO2</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" name="iso2" class="form-control" value="{!! $state->iso2 !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Official Language</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" name="official_language" class="form-control" value="{!! $state->official_language !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Population</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="number" name="population" class="form-control" value="{!! $state->population !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Size (Sq km)</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="number" name="size" class="form-control" value="{!! $state->size !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Region</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <select class="form-control" name="region">
                                        <option value="{!! $state->region !!}" >{!! $state->region !!}</option>
                                        <option value="North">North</option>
                                        <option value="East">East</option>
                                        <option value="South">South</option>
                                        <option value="West">West</option>
                                        <option value="North East">North East</option>
                                        <option value="North West">North West</option>
                                        <option value="North Central">North Central</option>
                                        <option value="South East">South East</option>
                                        <option value="South West">South West</option>
                                        <option value="South South">South South</option>
                                    </select>
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
