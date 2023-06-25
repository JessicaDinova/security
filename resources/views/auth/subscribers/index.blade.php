@extends('auth.layouts')

@section('content')
    <section>
        <div style="display: flex; flex-direction: row; gap: 55%; margin-bottom: 30px; margin-top: 10px">
            <h2>Overview of your subscribers</h2>
            <a href="{{route('subscribers.create')}}" class="button" style="text-decoration: none">Add new subscriber</a>
        </div>

        <table class="table has-text-centered">
            <thead>
            <tr>
                <th class="has-text-centered">ID</th>
                <th class="has-text-centered">Name</th>
                <th class="has-text-centered">Surname</th>
                <th colspan="4">Money spent on your paw pics</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subscribers as $subscriber)
                <tr class="@if($subscriber->premiumSubscriber()) blue @endif">
                    <td>{{$subscriber->id}}</td>
                    <td>{{$subscriber->name}}</td>
                    <td>{{$subscriber->surname}}</td>
                    <td>{{$subscriber->moneySpent}}€</td>
                    <td><a href="{{route('subscribers.show', $subscriber->id)}}" class="button" style="text-decoration: none">Show</a></td>
                    <td><a href="{{route('subscribers.edit', $subscriber->id)}}" class="button" style="text-decoration: none">Edit</a></td>
                    <td>
                        <form method="POST" action="{{route('subscribers.show', $subscriber->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection
