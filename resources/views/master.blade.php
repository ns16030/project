@extends('layouts.app')

@section('content')

    <h1>Meistarklases</h1>
 @foreach($master as $ma)
        <div><a href = "/oneclass/{{$ma->id}}">
        <div class="event-thumb">

            <h2>{{$ma->masterclass}}</h2>
            <p>{{$ma->description}}</p>
        </div>
            </a>
        </div>
    @endforeach
@endsection