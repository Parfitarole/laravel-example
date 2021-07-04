@extends('index')

@section('content')
    <div class="row">
        <div class="col-xl-4">
            <div class="p-3 border bg-light rounded shadow-sm" style="height: 90vh;">
                <h6 class="text-center">Followed Accounts</h6>
                @foreach($follows as $follow)
                    <p>User id: {{ $follow->userFollowedId }}</p>
                @endforeach
            </div>
        </div>
        <div class="col-xl-8">
            <div class="p-3 border bg-light rounded shadow-sm"  style="height: 90vh;">
                <h6 class="text-center">Messages</h6>
            </div>
        </div>
    </div>
@endsection
