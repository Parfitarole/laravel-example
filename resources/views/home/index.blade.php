@extends('index')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 center offset-md-4">
                <h2 class="text-center">Home Page</h2><hr>
                <p>
                    Welcome to my demo website
                    @empty($account)
                        , please <a href="/log-in" class="text-reset">log in</a> or <a href="/sign-up" class="text-reset">sign up</a>
                    @endempty
                :)</p>
            </div>
        </div>
    </div>
@endsection
