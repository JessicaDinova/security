@extends('auth.layouts')

@section('content')
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4" style="margin-top: 10px; margin-bottom: 20px">New subscriber</h1>

        <form method="POST" action="{{route('subscribers.store')}}">
            @csrf

            <div class="field">
                <label class="label" for="name">Name</label>
                <div class="control">
                    <input class="input @error('name') is-danger @enderror"
                           type="text"
                           name="name"
                           id="name"
                           value="{{old('name')}}">
                    @error('name')
                    <p class="help is-danger">{{ $errors->first ('name')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="surname">Surname</label>
                <div class="control">
                    <input class="input @error('surname') is-danger @enderror"
                           type="text"
                           name="surname"
                           id="surname"
                           value="{{old('surname')}}">
                    @error('surname')
                    <p class="help is-danger">{{ $errors->first ('surname')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="moneySpent">Money spent</label>
                <div class="control">
                    <input class="input @error('moneySpent') is-danger @enderror"
                           type="number"
                           min="0"
                           name="moneySpent"
                           id="moneySpent"
                           value="{{old('moneySpent')}}">
                    @error('moneySpent')
                    <p class="help is-danger">{{ $errors->first ('moneySpent')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <button class="button" type="submit">Submit</button>
                <a href="{{route('subscribers.index')}}" class="button" style="text-decoration: none;">Back to overview</a>
            </div>

        </form>
    </div>

@endsection
