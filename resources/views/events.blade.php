@extends('layouts.app')

@section('content')

    <h1>Pasākumi</h1>
    @foreach($events as $ev)
        <div><a href = "/oneevent/{{$ev->id}}">
        <div class="event-thumb">

            <h2>{{$ev->name}}</h2>
            <p>{{$ev->description}}</p>
        </div>
            </a>
        </div>
    @endforeach

@endsection