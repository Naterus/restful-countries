@extends("layouts.admin-layout")
@section("title","Api Tokens")
@section("page-title","Api Tokens")
@section("tokens","current")
@section("page-content")
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">Api Personal Access Tokens</h4>
                    <!-- /.box-title -->

                    <!-- /.dropdown js__dropdown -->
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="20%">Email</th>
                            <th width="30%">Encrypted Token</th>
                            <th width="15%">Generated at</th>
                            <th width="15%">Last Used at</th>
                            <th width="15%">Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php $id = 1; ?>
                        @foreach($api_tokens as $api_token)
                            <tr>
                                <td >{!! $id !!}</td>
                                <td >{!! $api_token->user->email !!}</td>
                                <td >{!! $api_token->token !!}</td>
                                <td >{!! $api_token->created_at->format("d M Y h:i:s A") !!}</td>
                                <td >{!! $api_token->last_used_at!!}</td>
                                <td ><a href="javascript:void(0)" onclick="confirmTokenDelete('{!! $api_token->tokenable_id !!}')">Revoke Token</a></td>
                            </tr>
                            <?php $id++; ?>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="remodal" data-remodal-id="delete-token" role="dialog"
         aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close"
                aria-label="Close"></button>


        <form method="post" action="{!! route("admin.api_tokens.revoke") !!}">
            @csrf
            <div class="remodal-content">
                <h2 id="modal1Title">Revoke Api Access Token</h2>
                <h3 class="text-danger">Token would be deleted and user won't have access to api.</h3>
                <br/>
                <input type="number" name="token_id" hidden>
            </div>
            <span data-remodal-action="cancel" class="remodal-cancel">Cancel</span>
            <button class="remodal-confirm">Proceed Revoke
            </button>
        </form>
    </div>

@endsection
@section("page-script")
    <script>
        function confirmTokenDelete($token){
            $("input[name='token_id']").val($token);

            window.location.href = "#delete-token";
        }
    </script>
@endsection
