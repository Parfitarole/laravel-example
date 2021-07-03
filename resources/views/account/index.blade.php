@extends('index')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 center offset-md-4">
                <h2 class="text-center">Account Page</h2><hr>
                <p>Welcome, {{ $account->username }}</p>
            </div>
        </div>
    </div>
@endsection
