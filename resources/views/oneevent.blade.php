@extends('layouts.app')

@section('content')
    <h1>{{$events->name}}</h1>
    <p>{{$events->description}}</p>


      <hr>

      <h4>Ieraksti komentāru:</h4>
      <form role="form">
        <div class="form-group">
          <textarea class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Pievienot</button>
      </form>
      <br><br>
      
      <p><span class="badge">2</span> Komentāri:</p><br>
      
      <div class="row">
        <div class="col-sm-2 text-center">
          <img src="bandmember.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>Username <small>Timestamp</small></h4>
          <p>Comment</p>
          <br>
@endsection