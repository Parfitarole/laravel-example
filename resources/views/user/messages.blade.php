@extends('index')

@section('content')
    <div class="row">
        <div class="col-xl-4">
            <div class="p-3 border bg-light rounded shadow-sm" style="height: 90vh;">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                @foreach($follows as $follow)
                    <p>User id: {{ $follow->userFollowedId }}</p>
                @endforeach
            </div>
        </div>
        <div class="col-xl-8">
            <div class="p-3 border bg-light rounded shadow-sm"  style="height: 84vh;">
                <h6 class="text-center">Username</h6>
            </div>
            <div class="mt-3 p-3 border bg-light rounded shadow-sm"  style="height: 5vh;">
                <form class="form" action="/message" method="post">
                    <div class="row">
                        <div class="col-xl-11">
                            <div class="form-outline">
                                <textarea class="form-control" name="content" placeholder="What would you like to say?" rows="1"></textarea>
                            </div>
                        </div>
                        <div class="col-xl-1">
                            <input type="hidden" name="recepient_id" value="2">
                            @csrf
                            <button class="btn btn-outline-secondary float-end" type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
