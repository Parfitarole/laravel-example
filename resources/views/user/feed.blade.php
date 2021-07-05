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
            <div class="p-3 border bg-light rounded shadow-sm" style="height: 13vh;">
                <form class="form" action="/post" method="post">
                    <div class="form-outline">
                        <textarea class="form-control" name="content" placeholder="What's on your mind?" rows="3"></textarea>
                    </div>
                    @csrf
                    <button class="btn btn-outline-secondary mt-3 float-end" type="submit">Post</button>
                </form>
            </div>
            <div class="mt-3 p-3 border bg-light rounded shadow-sm" style="height: 90vh;">
                @if(count($posts) > 0)
                    @foreach($posts as $post)
                        <h6>@ {{ $post->account_id }} <span class="fw-normal">{{ $post->created_at->diffForHumans() }}</span></h6>
                        <p>{{ $post->content }}</p>
                        <hr>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="col-xl-3">
            <div class="p-3 border bg-light rounded shadow-sm">
                <h6 class="text-center">Reccomended Users</h6>
            </div>
        </div>
    </div>
@endsection
