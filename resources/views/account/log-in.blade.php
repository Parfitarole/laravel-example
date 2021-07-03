@extends('index')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 center offset-md-4 mt-5">
                <h2>Login</h2><hr>
                <form class="form-horizontal" action="/log-in-action" method="post">
                    <div class="form-group">
                        @if (Session::get('Success'))
                            <div class="alert alert-success">
                                {{ Session::get('Success') }}
                            </div>
                        @endif
                        @if (Session::get('Error'))
                            <div class="alert alert-danger">
                                {{ Session::get('Error') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label"><h6>Email</h6></label>
                        <input class="form-control" type="text" placeholder="Enter Email" name="email" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label"><h6>Password</h6></label>
                        <input class="form-control" type="password" placeholder="Enter Password" name="password">
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group mb-3">
                        <p>Don't have an account? <a href="/sign-up" class="text-reset">Create one</a></p>
                    </div>
                    @csrf
                    <div class="form-group text-center mt-4">
                        <button type="submit" class="btn btn-outline-dark">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
