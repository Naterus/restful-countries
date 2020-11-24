@extends("layouts.admin-layout")
@section("title","Api Requests")
@section("page-title","Api Requests")
@section("api-requests","current")
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
                    <h4 class="box-title">Api Requests</h4>
                    <!-- /.box-title -->

                    <!-- /.dropdown js__dropdown -->
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Endpoint</th>
                            <th>Status</th>
                            <th>Message</th>
                            <th>Request Time</th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php $id = 1; ?>
                        @foreach($api_requests as $api_request)
                            <tr>
                                <td>{!! $id !!}</td>
                                <td>{!! $api_request->endpoint !!}</td>
                                <td>@if($api_request->status == 1) Successful @else Failed @endif</td>
                                <td>{!! $api_request->message !!}</td>
                                <td>{!! $api_request->created_at !!}</td>
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
