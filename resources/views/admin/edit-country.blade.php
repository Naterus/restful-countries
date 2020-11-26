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
                                <label for="inputEmail3"  class="col-sm-2 control-label">Nick Name</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="text" name="nick_name" class="form-control" value="{!! $country->nick_name !!}">
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
                                    <input type="text" name="iso" class="form-control" value="{!! $country->iso !!}">
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
                                    <select class="form-control" name="official_language">
                                        <option value="{!! $country->official_language !!}" >{!! $country->official_language !!}</option>
                                        <option value="Nigeria">North America</option>
                                        <option value="Ghana">South America</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Capital</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <select class="form-control" name="capital">
                                        <option value="{!! $country->capital !!}" >{!! $country->capital !!}</option>
                                        <option value="Nigeria">North America</option>
                                        <option value="Ghana">South America</option>
                                    </select>

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
                                <label for="inputEmail3" class="col-sm-2 control-label">Independence Day</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="date" name="independence_day" class="form-control" value="{!! $country->independence_date !!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">President</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <select class="form-control" name="president">
                                        <option value="{!! $country->president !!}" >{!! $country->president !!}</option>
                                        <option value="Nigeria">North America</option>
                                        <option value="Ghana">South America</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Size (Sqm)</label>
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
                                        <option value="North America">North America</option>
                                        <option value="South America">South America</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Region</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <select class="form-control" name="region">
                                        <option value="{!! $country->region !!}" >{!! $country->region !!}</option>
                                        <option value="Nigeria">North</option>
                                        <option value="Ghana">East</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">National Holiday</label>
                                <span ></span>
                                <div class="col-sm-6">
                                    <input type="date" name="national_holiday" class="form-control" value="{!! $country->national_holiday !!}">
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
