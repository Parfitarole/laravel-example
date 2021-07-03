@extends('index')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 center offset-md-4 mt-5">
                <h2>Sign Up</h2><hr>
                <form class="form-horizontal" action="/sign-up-action" method="post">
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
                        <input class="form-control mb-1" type="text" placeholder="Enter Email" name="email" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label"><h6>Username</h6></label>
                        <input class="form-control mb-1" type="text" placeholder="Enter Username" name="username" value="{{ old('username') }}">
                        <span class="text-danger">@error('username'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label"><h6>Password</h6></label>
                        <input class="form-control mb-1" type="password" placeholder="Enter Password" name="password_1">
                        <span class="text-danger">@error('password_1'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label"><h6>Confirm Password</h6></label>
                        <input class="form-control mb-1" type="password" placeholder="Enter Password Again" name="password_2">
                        <span class="text-danger">@error('password_2'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group mb-3">
                        <p>Already have an account? <a href="/log-in" class="text-reset">Log in</a></p>
                    </div>
                    @csrf
                    <div class="form-group text-center mt-4">
                        <button type="submit" class="btn btn-outline-dark">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
