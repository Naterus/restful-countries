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
                    <h4 class="box-title"><a href="{!! route("admin.countries") !!}">Countries</a> / {!! $country->name !!}</h4>
                    <div class="card-content">
                        <form class="form-horizontal" action="{!! route("admin.countries.edit.update",$country->id) !!}" method="post">
                            @csrf
                            <input type="number" hidden="hidden"id="inputEmail3" name="id" value="{!! $country->id !!}">

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" name="name" required="required" class="form-control" value="{!! $country->name !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Full Name</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" name="full_name" class="form-control" value="{!! $country->full_name !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">About</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="description">{!! $country->description!!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">ISO-2</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" name="iso2" class="form-control" value="{!! $country->iso2 !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">ISO-3</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" name="iso3" class="form-control" value="{!! $country->iso3 !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Country Code</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" name="code" class="form-control" value="{!! $country->code !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Currency</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" name="currency" class="form-control" value="{!! $country->currency!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Official Language</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" name="official_language" class="form-control" value="{!! $country->official_language!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Capital</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" name="capital" class="form-control" value="{!! $country->capital !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Population</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="number" name="population" class="form-control" value="{!! $country->population !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Independence Day </label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="date" name="independence_day" class="form-control" value="{!! $country->independence_date !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Size (Sq km)</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="number" name="size" class="form-control" value="{!! $country->size !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Continent</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <select class="form-control" name="continent">
                                        <option value="{!! $country->continent !!}" >{!! $country->continent !!}</option>
                                        <option value="Africa">Africa</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Oceana">Oceana</option>
                                        <option value="Central America">Central America</option>
                                        <option value="The Caribean">The Caribean</option>
                                        <option value="Asia">Asia</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Europe">Europe</option>
                                        <option value="South America">South America</option>
                                        <option value="North America">North America</option>
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
