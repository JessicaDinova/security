@extends('auth.layouts')

@section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">onlyPaws</div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @else
                        <div class="alert alert-success">
                            You are logged in!
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <img src="/images/catPaw.png" style="height: 400px; width: 500px">
        <img src="/images/catPaws.png" style="height: 400px; width: 500px">
    </div>

@endsection
