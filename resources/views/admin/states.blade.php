@extends("layouts.admin-layout")
@section("title","Countries")
@section("page-title","Countries")
@section("countries","current")
@section("page-style")
    <!-- Data Tables -->
    <link rel="stylesheet" href="{!! asset('storage/users/plugin/datatables/media/css/dataTables.bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('storage/users/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css') !!}">
@endsection
@section("page-content")
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-xs-12">
                <div class="box-content">
                    <h4 class="box-title"><a href="{!! route("admin.countries") !!}">Countries</a> / <a href="{!! route('admin.countries.edit',$country->id) !!}">{!! $country->name !!}</a> / States</h4>
                    <!-- /.box-title -->
                    @if(helper::instance()->isPermitted("CREATE STATE"))
                        <div class="form-group margin-bottom-100">
                            <div class="col-sm-10">
										<span data-remodal-target="remodal"
                                              class="btn btn-info btn-sm waves-effect waves-light">Add State</span>
                            </div>
                        </div>
                    @endif

                    <!-- /.dropdown js__dropdown -->
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>State Id</th>
                            <th>Name</th>
                            <th>Population</th>
                            <th>Region</th>
                            <th>ISO2</th>
                            <th>Fips Code</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $id = 1; ?>
                        @foreach($states as $state)
                            <tr>
                                <td>{!! $id !!}</td>
                                <td>{!! $state->id !!}</td>
                                <td>{!! $state->name !!}</td>
                                <td>{!! $state->population !!}</td>
                                <td>{!! $state->region !!}</td>
                                <td>{!! $state->iso2 !!}</td>
                                <td>{!! $state->fips_code !!}</td>
                                <td>
                                    @if(helper::instance()->isPermitted("UPDATE STATE"))
                                        <a href="{!! route("admin.states.edit",["country" => $state->country_id,"state"=>$state->id]) !!}">Edit</a> <br/>
                                    @endif
                                    @if(helper::instance()->isPermitted("VIEW DISTRICT"))
                                        <a href="{!! route("admin.districts",["country" => $state->country_id,"state"=>$state->id]) !!}">districts</a><br/>
                                    @endif
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

    @if(helper::instance()->isPermitted("CREATE STATE"))
        <div class="remodal" data-remodal-id="remodal" role="dialog"
             aria-labelledby="modal1Title" aria-describedby="modal1Desc">
            <button data-remodal-action="close" class="remodal-close"
                    aria-label="Close"></button>


            <form method="post" action="{!! route("admin.states.create",$country->id) !!}">
                @csrf
                <div class="remodal-content">
                    <h2 id="modal1Title">Create Country</h2>
                    <label for="inputEmail3" class="col-sm-12 control-label">State Name</label>
                    <input type="text" name="name" required="required" class="form-control">
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">State ISO-2</label>
                    <input type="text" name="iso2"  class="form-control">
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Nick Name</label>
                    <input type="text" name="nick_name" class="form-control">
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Fips Code</label>
                    <input type="text" name="fips_code" class="form-control">
                    <br/>

                    <label for="inputEmail3" class="col-sm-12 control-label">Slogan</label>
                    <input type="text" name="slogan" class="form-control">
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


@endsection
@section("page-script")

@endsection
