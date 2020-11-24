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
                    <h4 class="box-title">Countries</h4>
                    <!-- /.box-title -->

                    <!-- /.dropdown js__dropdown -->
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                        <tr>
                            <th>Country Id</th>
                            <th>Flag</th>
                            <th>Name</th>
                            <th>Capital</th>
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
                                <td>{!! $country->id !!}</td>
                                <td> <img src="{!! asset("storage/images/flags/".$country->flag) !!}" style="height:40px; width:40px;"></td>
                                <td>{!! $country->name !!}</td>
                                <td>{!! $country->capital !!}</td>
                                <td>{!! $country->population !!}</td>
                                <td>{!! $country->currency !!}</td>
                                <td>{!! $country->code !!}</td>
                                <td>{!! $country->iso2 !!}</td>
                                <td>{!! $country->iso3 !!}</td>
                                <td>
                                    <a  href="{!! route("admin.countries.edit",$country->id) !!}">Edit</a> <br style="margin-bottom: 20px;" />
                                    <a href="{!! route("admin.states",$country->id) !!}">States</a><br/>
                                    <a href="{!! route("admin.presidents",$country->id) !!}">Presidents</a><br/>
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

@endsection
@section("page-script")

@endsection
