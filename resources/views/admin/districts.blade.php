@extends("layouts.admin-layout")
@section("title","Districts")
@section("page-title","Districts")
@section("countries","current")
@section("page-style")
    <!-- Data Tables -->
    <link rel="stylesheet" href="{!! asset('storage/users/plugin/datatables/media/css/dataTables.bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('storage/users/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset("storage/users/plugin/modal/remodal/remodal.css") !!}">
    <link rel="stylesheet" href="{!! asset("storage/users/plugin/modal/remodal/remodal-default-theme.css") !!}">
@endsection
@section("page-content")
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-xs-12">
                <div class="box-content">
                    <h4 class="box-title"><a href="{!! route("admin.countries") !!}">Countries</a> / <a href="{!! route('admin.countries.edit',$country->id) !!}">{!! $country->name !!}</a> / <a href="{!! route("admin.states",$country->id) !!}"> States </a> / <a href="{!! route("admin.states.edit",["country"=>$country->id, "state" => $state->id]) !!}">{!! $state->name !!}</a>  / Disticts</h4>
                    <!-- /.box-title -->
                    <div class="form-group margin-bottom-100">
                        <div class="col-sm-10">
										<span data-remodal-target="remodal"
                                              class="btn btn-info btn-sm waves-effect waves-light">Add District</span>
                        </div>
                    </div>
                    <!-- /.dropdown js__dropdown -->
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>District Id</th>
                            <th>Name</th>
                            <th>Population</th>
                            <th>Slogan</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $id = 1; ?>
                        @foreach($districts as $district)
                            <tr>
                                <td>{!! $id !!}</td>
                                <td>{!! $district->id !!}</td>
                                <td>{!! $district->name !!}</td>
                                <td>{!! $district->population !!}</td>
                                <td>{!! $district->slogan !!}</td>
                                <td>{!! $district->description !!}</td>
                                <td>
                                    <a href="{!! route("admin.districts.edit",["country" => $district->country_id,"state"=>$district->state_id,"district"=>$district->id]) !!}">Edit</a> <br/>

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

    <div class="remodal" data-remodal-id="remodal" role="dialog"
         aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close"
                aria-label="Close"></button>


        <form method="post" action="{!! route("admin.districts.create",["country"=>$country->id,"state"=>$state->id]) !!}">
            @csrf
            <div class="remodal-content">
                <h2 id="modal1Title">Create District</h2>
                <label for="inputEmail3" class="col-sm-12 control-label"> Name</label>
                <input type="text" name="name" required="required" class="form-control">
                <br/>

                <label for="inputEmail3" class="col-sm-12 control-label">Nick Name</label>
                <input type="text" name="nick_name" class="form-control">
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
            <!-- 									<input type="text" th:value="${user.id}" th:field="${user.id}" hidden="hidden">  -->
            <span data-remodal-action="cancel" class="remodal-cancel">Cancel</span>
            <button class="remodal-confirm">Submit
            </button>
        </form>
    </div>

@endsection
@section("page-script")

@endsection
