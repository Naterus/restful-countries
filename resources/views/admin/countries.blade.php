@extends("layouts.admin-layout")
@section("title","Countries")
@section("page-title","Countries")
@section("countries","current")

@section("page-content")
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">Countries</h4>
                    <!-- /.box-title -->
                    @if(helper::instance()->isPermitted("CREATE COUNTRY"))
                        <div class="form-group margin-bottom-100">
                            <div class="col-sm-10">
										<span data-remodal-target="remodal"
                                              class="btn btn-info btn-sm waves-effect waves-light">Add Country</span>
                            </div>
                        </div>
                    @endif

                <!-- /.dropdown js__dropdown -->
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                        <tr>
                            <th>Flag</th>
                            <th>Name</th>
                            <th>Capital</th>
                            <th>Continent</th>
                            <th>Population</th>
                            <th>Currency</th>
                            <th>Phone Code</th>
                            <th>Iso2</th>
                            <th>Iso3</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($countries as $country)
                            <tr>
                                <td> <img src="{!! asset("storage/images/flags/".$country->flag) !!}" style="height:40px; width:40px;"></td>
                                <td>{!! $country->name !!}</td>
                                <td>{!! $country->capital !!}</td>
                                <td>{!! $country->continent !!}</td>
                                <td>{!! $country->population !!}</td>
                                <td>{!! $country->currency !!}</td>
                                <td>{!! $country->code !!}</td>
                                <td>{!! $country->iso2 !!}</td>
                                <td>{!! $country->iso3 !!}</td>
                                <td>
                                    @if(helper::instance()->isPermitted("UPDATE COUNTRY"))
                                        <a  href="{!! route("admin.countries.edit",$country->id) !!}">Edit</a> <br style="margin-bottom: 20px;" />
                                    @endif
                                    @if(helper::instance()->isPermitted("VIEW STATE"))
                                        <a href="{!! route("admin.states",$country->id) !!}">States</a><br/>
                                    @endif
                                    @if(helper::instance()->isPermitted("VIEW PRESIDENT"))
                                        <a href="{!! route("admin.presidents",$country->id) !!}">Presidents</a><br/>
                                    @endif
                                    @if(helper::instance()->isPermitted("UPDATE COVID19"))
                                        <a href="{!! route("admin.covid19.edit",$country->id) !!}">Covid 19</a><br/>
                                    @endif
                                    @if(helper::instance()->isPermitted("DELETE COUNTRY"))
                                        <a href="javascript:void(0)" onclick="confirmCountryDelete('{!! $country->id  !!}')">Delete</a> <br/>
                                @endif
                                <!-- /.dropdown js__dropdown -->
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @if(helper::instance()->isPermitted("CREATE COUNTRY"))
        <div class="remodal" data-remodal-id="remodal" role="dialog"
             aria-labelledby="modal1Title" aria-describedby="modal1Desc">
            <button data-remodal-action="close" class="remodal-close"
                    aria-label="Close"></button>


            <form method="post" action="{!! route("admin.countries.create") !!}">
                @csrf
                <div class="remodal-content">
                    <h2 id="modal1Title">Create Country</h2>
                    <label for="inputEmail3" class="col-sm-12 control-label">Country Name</label>
                    <input type="text" name="name" required="required" class="form-control">
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">About</label>
                    <textarea name="description" class="form-control"></textarea>
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Country ISO-2</label>
                    <input type="text" name="iso2"  class="form-control">
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Country ISO-3</label>
                    <input type="text" name="iso3"  class="form-control">
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Nick Name</label>
                    <input type="text" name="nick_name" class="form-control">
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Currency</label>
                    <input type="text" name="currency" class="form-control">
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Capital</label>
                    <input type="text" name="capital" class="form-control">
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Country Code</label>
                    <input type="text" name="country_code" class="form-control">
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Slogan</label>
                    <input type="text" name="slogan" class="form-control">
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Continent</label>
                    <select name="continent"  class="form-control">
                        <option value=""  selected disabled>-------------</option>
                        <option value="North America">North America</option>
                        <option value="Female">Female</option>
                    </select>
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Region</label>
                    <select name="region"  class="form-control">
                        <option value=""  selected disabled>-------------</option>
                        <option value="North">North</option>
                        <option value="Female">Female</option>
                    </select>
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Official Language</label>
                    <input type="text" name="official_language" class="form-control">
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Population</label>
                    <input type="number" name="population" class="form-control">
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Size (Sqm)</label>
                    <input type="number" name="size" class="form-control">
                    <br/>

                </div>
                <span data-remodal-action="cancel" class="remodal-cancel">Cancel</span>
                <button class="remodal-confirm">Submit
                </button>
            </form>
        </div>
    @endif


    @if(helper::instance()->isPermitted("DELETE COUNTRY"))
        <div class="remodal" data-remodal-id="delete-country" role="dialog"
             aria-labelledby="modal1Title" aria-describedby="modal1Desc">
            <button data-remodal-action="close" class="remodal-close"
                    aria-label="Close"></button>


            <form method="post" action="{!! route("admin.countries.delete") !!}">
                @csrf
                <div class="remodal-content">
                    <h2 id="modal1Title">Delete Country</h2>
                    <h3 class="text-danger">Country and associated  states and districts would be deleted.</h3>
                    <br/>
                    <input type="number" name="country" hidden>
                </div>
                <span data-remodal-action="cancel" class="remodal-cancel">Cancel</span>
                <button class="remodal-confirm">Proceed Delete
                </button>
            </form>
        </div>
    @endif


@endsection
@section("page-script")
    @if(helper::instance()->isPermitted("DELETE COUNTRY"))
        <script>
            function confirmCountryDelete($country,$state){
                $("input[name='country']").val($country);

                window.location.href = "#delete-country";
            }
        </script>
    @endif
@endsection
