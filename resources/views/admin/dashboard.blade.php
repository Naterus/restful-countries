@extends("layouts.admin-layout")
@section("title","Dashboard")
@section("page-title","Dashboard")
@section("dashboard","current")
@section("page-content")

    <div class="main-content">

            <div class="col-lg-12 col-xs-12">
                <div class="box">
                    <h4 class="box-title">API Requests</h4>
                    <!-- /.box-title -->
                    <div class="row small-spacing">

                        <div class="col-lg-4 col-xs-12">
                            <div class="box-content green">
                                    <div class="float-left">
                                        <i class="fa fa-check-square-o"></i>
                                    </div>
                                    <div class="float-right">
                                        <p>Successful requests</p>
                                        <p>{!! $successful_requests !!}</p>
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12">
                            <div class="box-content red">
                                <div class="float-left">
                                    <i class="fa  fa-ban "></i>
                                </div>
                                <div class="float-right">
                                    <p>Failed requests</p>
                                    <p>{!! $failed_requests !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12">
                            <div class="box-content blue">
                                <div class="float-left">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="float-right">
                                    <p>Total requests</p>
                                    <p>{!! $total_requests !!}</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-lg-12 col-xs-12 -->



            <div class="col-lg-12 col-xs-12">
                    <div class="row small-spacing">

                        <div class="col-lg-4 col-xs-12">
                            <div class="box-content">

                                <h4 class="box-title text-success">Feedbacks</h4>

                                <div class="content widget-stat">
                                    <div class="left-content"><i class="fa fa-thumbs-up text-success" ></i></div>

                                    <div class="right-content">
                                        <h2 class="counter text-success" >{!! $feedbacks !!}</h2>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-xs-12">
                            <div class="box-content">
                                <h4 class="box-title text-info">Total API Versions</h4>

                                <div class="content widget-stat">
                                    <div class="left-content"><i class="fa fa-book text-info"></i></div>
                                    <div class="right-content">
                                        <h2 class="counter text-info" >
                                           {!! $total_api_versions !!}
                                        </h2>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-xs-12">
                            <div class="box-content">
                                <h4 class="box-title text-warning">Current API Version</h4>

                                <div class="content widget-stat">
                                    <div class="left-content"><i class="fa fa-exchange text-warning"></i></div>
                                    <div class="right-content">
                                        <h2 class="counter text-warning" >V{!! $current_api_version !!}</h2>
                                    </div>
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
