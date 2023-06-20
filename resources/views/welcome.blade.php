@extends('auth.layouts')

@section('content')
    <div class="row justify-content-center mt-5">
        @if (Route::has('login'))
            @auth
            <h1>To see our pictures click on onlyPaws button in navigation</h1>
            @else
        <h1>To see our wonderful pictures please log in or register</h1>
    </div>
    @endauth
    @endif
    <div>
        <img src="/images/winkingCat.png" style="height: 400px; width: 500px">
    </div>
@endsection
