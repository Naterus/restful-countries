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
                            <th width="5%">#</th>
                            <th width="20%">Endpoint</th>
                            <th width="10%">Status</th>
                            <th width="15%">Host</th>
                            <th width="10%">Email</th>
                            <th width="10%">Website</th>
                            <th width="10%">Message</th>
                            <th width="15%">Request Time</th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php $id = 1; ?>
                        @foreach($api_requests as $api_request)
                            <tr>
                                <td >{!! $id !!}</td>
                                <td >{!! $api_request->endpoint !!}</td>
                                <td >@if($api_request->status == 1) Successful @else Failed @endif</td>
                                <td >{!! $api_request->host !!}</td>
                                <td >{!! $api_request->email !!}</td>
                                <td >{!! $api_request->website !!}</td>
                                <td >{!! $api_request->message !!}</td>
                                <td >{!! $api_request->created_at !!}</td>
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
