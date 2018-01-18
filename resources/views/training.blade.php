@extends('layouts.app')

@section('content')

    <h1>Atklātie treniņi</h1>
        @foreach($trainings as $train)
        <div><a href = "/">
        <div class="event-thumb">

            <h2>{{$train->name}}</h2>
            <p>{{$train->description}}</p>
        </div>
            </a>
        </div>
@endforeach
@endsection