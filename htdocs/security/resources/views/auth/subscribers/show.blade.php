@extends('auth.layouts')

@section('content')
    <div style="display: flex; flex-direction: row; gap: 66%; margin-bottom: 30px; margin-top: 10px">
        <h1 class="title">{{$subscriber->name}} {{$subscriber->surname}}</h1>
        <a href="{{route('subscribers.index')}}" class="button" style="text-decoration: none;">Back to overview</a>
    </div>
    <table class="table is-striped has-text-centered">
        <thead>
        <tr>
            <th class="has-text-centered">ID</th>
            <th class="has-text-centered">Name</th>
            <th class="has-text-centered">Surname</th>
            <th class="has-text-left">Money spent on your paw pics</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$subscriber->id}}</td>
                <td>{{$subscriber->name}}</td>
                <td>{{$subscriber->surname}}</td>
                <td class="has-text-left">{{$subscriber->moneySpent}}€</td>
            </tr>
        </tbody>
    </table>
@endsection
