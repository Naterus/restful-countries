@extends("layouts.admin-layout")
@section("title","Feedbacks")
@section("page-title","Feedbacks")
@section("feedbacks","current")
@section("page-content")
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">Feedbacks</h4>
                    <!-- /.box-title -->

                    <!-- /.dropdown js__dropdown -->
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Category</th>
                            <th>Feedback</th>
                            <th>Feedback Time</th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php $id = 1; ?>
                        @foreach($feedbacks as $feedback)
                            <tr>
                                <td>{!! $id !!}</td>
                                <td>@if($feedback->name == "") Not provided @else {!! $feedback->name !!} @endif</td>
                                <td>@if($feedback->email == "") Not provided @else {!! $feedback->email !!} @endif</td>
                                <td>{!! $feedback->category !!}</td>
                                <td>{!! $feedback->feedback !!}</td>
                                <td>{!! $feedback->created_at !!}</td>
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
