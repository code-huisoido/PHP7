@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    chat message
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    window.Echo.private('chat-room.1').listen('ChatMessageWasReceived', function (data) {
        console.log(data.user, data.chatMessage);
    });
</script>
@endsection