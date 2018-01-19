@extends('layouts.app')

@section('content')

<h1>{{ $masters->masterclass }}</h1>
<p>{{ $masters->description }}</p>
<small>{{ $masters->User->name }}</small>
<small>{{ $masters->date }}</small>
@endsection