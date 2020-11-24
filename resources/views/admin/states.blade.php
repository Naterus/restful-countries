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
                                    <a href="{!! route("admin.states.edit",["country" => $state->country_id,"state"=>$state->id]) !!}">Edit</a> <br/>
                                    <a href="{!! route("admin.districts",["country" => $state->country_id,"state"=>$state->id]) !!}">districts</a><br/>
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

@endsection
@section("page-script")

@endsection
