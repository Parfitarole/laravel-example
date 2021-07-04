@extends('index')

@section('content')
    <div class="row">
        <div class="col-xl-3">
            <div class="p-3 border bg-light rounded shadow-sm">
                <h6 class="text-center"> {{ $account->username }}</h6>
                <ul class="mt-3">
                    <li>Email: {{ $account->email }}</li>
                </ul>
            </div>
            <div class="mt-3 p-3 border bg-light rounded shadow-sm">
                <h6 class="text-center">Followed Users</h6>
                <ul class="mt-3">
                @foreach($follows as $follow)
                    <li>User id: {{ $follow->userFollowedId }}</li>
                @endforeach
                </ul>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="p-3 border bg-light rounded shadow-sm" style="height: 90vh;">
                <h6 class="text-center">Feed</h6>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="p-3 border bg-light rounded shadow-sm">
                <h6 class="text-center">Other Stuff</h6>
            </div>
        </div>
    </div>
@endsection
