@extends('index')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 center offset-md-4">
                <h2 class="text-center">{{ $account->username }}</h2><hr>
                @if(session('AccountId') != $account->id)
                    <button class="btn btn-outline-dark" onclick="location.href='/follow/{{ $account->id }}'">Follow</button>
                    <button class="btn btn-outline-dark disabled" onclick="location.href='/unfollow/{{ $account->id }}'">Unfollow</button>
                @elseif(session('AccountId') == $account->id)
                    <p class="text-center">This is your public profile!</p>
                @endif
            </div>
        </div>
    </div>
@endsection
