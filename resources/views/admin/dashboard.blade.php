@extends("layouts.admin-layout")
@section("title","Dashboard")
@section("page-title","Dashboard")
@section("dashboard","current")
@section("page-content")
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-lg-12 col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">API Requests</h4>
                    <!-- /.box-title -->
                    <div class="row small-spacing">

                        <div class="col-lg-4 col-xs-12">
                            <div class="box-content">
                                <h4 class="box-title text-success">Successful</h4>
                                <!-- /.box-title -->

                                <div class="content widget-stat">
                                    <div class="left-content"><i class="fa fa-check text-success" style="font-size:50px;"></i></div>
                                    <!-- /#traffic-sparkline-chart-1 -->
                                    <div class="right-content">
                                        <h2 class="counter text-success" >{!! $successful_requests !!}</h2>
                                        <!-- /.counter -->
                                        <p class="text text-success">Successful Requests</p>
                                        <!-- /.text -->
                                    </div>
                                    <!-- .right-content -->
                                </div>
                                <!-- /.content widget-stat -->
                            </div>
                            <!-- /.box-content -->
                        </div>
                        <!-- /.col-lg-4 col-xs-12 -->

                        <div class="col-lg-4 col-xs-12">
                            <div class="box-content">
                                <h4 class="box-title text-danger">Failed</h4>
                                <!-- /.box-title -->

                                <div class="content widget-stat">
                                    <div class="left-content"><i class="fa fa-times text-danger" style="font-size:50px;"></i></div>
                                    <!-- /#traffic-sparkline-chart-2 -->
                                    <div class="right-content">
                                        <h2 class="counter text-danger" >{!! $failed_requests !!}</h2>
                                        <!-- /.counter -->
                                        <p class="text text-danger">Failed Requests</p>
                                        <!-- /.text -->
                                    </div>
                                    <!-- .right-content -->
                                </div>
                                <!-- /.content widget-stat -->
                            </div>
                            <!-- /.box-content -->
                        </div>
                        <!-- /.col-lg-4 col-xs-12 -->

                        <div class="col-lg-4 col-xs-12">
                            <div class="box-content">
                                <h4 class="box-title text-info">Total Requests</h4>
                                <!-- /.box-title -->

                                <div class="content widget-stat">
                                    <div class="left-content"><i class="fa fa-clock-o text-info" style="font-size:50px;"></i></div>
                                    <!-- /#traffic-sparkline-chart-3 -->
                                    <div class="right-content">
                                        <h2 class="counter text-info">{!! $total_requests !!}</h2>
                                        <!-- /.counter -->
                                        <p class="text text-info">Failed and successful</p>
                                        <!-- /.text -->
                                    </div>
                                    <!-- .right-content -->
                                </div>
                                <!-- /.content widget-stat -->
                            </div>
                            <!-- /.box-content -->
                        </div>
                        <!-- /.col-lg-4 col-xs-12 -->
                    </div>
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-lg-12 col-xs-12 -->
        </div>
        <!-- /.row small-spacing -->

        <div class="row small-spacing">
            <div class="col-lg-12 col-xs-12">
                <div class="box-content">
                    <div class="row small-spacing">

                        <div class="col-lg-4 col-xs-12">
                            <div class="box-content">
                                <h4 class="box-title text-success">Feedbacks</h4>
                                <!-- /.box-title -->

                                <div class="content widget-stat">
                                    <div class="left-content"><i class="fa fa-thumbs-up text-success" style="font-size:50px;"></i></div>
                                    <!-- /#traffic-sparkline-chart-1 -->
                                    <div class="right-content">
                                        <h2 class="counter text-success" >{!! $feedbacks !!}</h2>
                                        <!-- /.counter -->
                                        <!-- /.text -->
                                    </div>
                                    <!-- .right-content -->
                                </div>
                                <!-- /.content widget-stat -->
                            </div>
                            <!-- /.box-content -->
                        </div>

                        <div class="col-lg-4 col-xs-12">
                            <div class="box-content">
                                <h4 class="box-title text-info">Total API Versions</h4>
                                <!-- /.box-title -->

                                <div class="content widget-stat">
                                    <div class="left-content"><i class="fa fa-book text-info" style="font-size:50px;"></i></div>
                                    <!-- /#traffic-sparkline-chart-1 -->
                                    <div class="right-content">
                                        <h2 class="counter text-info" >
                                           {!! $total_api_versions !!}
                                        </h2>
                                        <!-- /.counter -->
                                        <!-- /.text -->
                                    </div>
                                    <!-- .right-content -->
                                </div>
                                <!-- /.content widget-stat -->
                            </div>
                            <!-- /.box-content -->
                        </div>

                        <div class="col-lg-4 col-xs-12">
                            <div class="box-content">
                                <h4 class="box-title text-warning">Current API Version</h4>
                                <!-- /.box-title -->

                                <div class="content widget-stat">
                                    <div class="left-content"><i class="fa fa-exchange text-warning" style="font-size:50px;"></i></div>
                                    <!-- /#traffic-sparkline-chart-1 -->
                                    <div class="right-content">
                                        <h2 class="counter text-warning" >V{!! $current_api_version !!}</h2>
                                        <!-- /.counter -->
                                        <!-- /.text -->
                                    </div>
                                    <!-- .right-content -->
                                </div>
                                <!-- /.content widget-stat -->
                            </div>
                            <!-- /.box-content -->
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.main-content -->
@endsection
@section("page-script")

@endsection
