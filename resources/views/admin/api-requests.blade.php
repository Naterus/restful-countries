@extends("layouts.admin-layout")
@section("title","Api Requests")
@section("page-title","Api Requests")
@section("api-requests","current")

@section("page-content")
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">Api Requests</h4>
                    <!-- /.box-title -->

                    <!-- /.dropdown js__dropdown -->
                    <table id="apiRequests" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Endpoint</th>
                            <th>Status</th>
                            <th>Host</th>
                            <th>Message</th>
                            <th>Request Time</th>
                        </tr>
                        </thead>

{{--                        <tbody>--}}

{{--                        <?php $id = 1; ?>--}}
{{--                        @foreach($api_requests as $api_request)--}}
{{--                            <tr>--}}
{{--                                <td >{!! $id !!}</td>--}}
{{--                                <td >{!! $api_request->endpoint !!}</td>--}}
{{--                                <td >@if($api_request->status == 1) Successful @else Failed @endif</td>--}}
{{--                                <td >{!! $api_request->host !!}</td>--}}
{{--                                <td >{!! $api_request->message !!}</td>--}}
{{--                                <td >{!! $api_request->created_at !!}</td>--}}
{{--                            </tr>--}}
{{--                            <?php $id++; ?>--}}
{{--                        @endforeach--}}

{{--                        </tbody>--}}
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
@section("page-script")
    <script>
        $('#apiRequests').DataTable( {
            ajax: '/administrator/api-requests',
            processing: true,
            serverSide: true,
            columns: [
                { data: 'id' },
                { data: 'endpoint' },
                { data: 'status' },
                { data: 'host' },
                { data: 'message' },
                { data: 'created_at' }
            ]
        } );
    </script>

@endsection
