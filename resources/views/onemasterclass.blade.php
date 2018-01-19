@extends('layouts.app')

@section('content')

<h1>{{ $masters->masterclass }}</h1>
<p>{{ $masters->description }}</p>
<small>{{ $masters->date }}</small>

@endsection