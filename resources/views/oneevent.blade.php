@extends('layouts.app')

@section('content')
    <h1>{{$events->name}}</h1>
    <p>{{$events->description}}</p>


      <hr>

      <h4>Ieraksti komentāru:</h4>
      <form role="form" method="post" action="/comments/{{$events->id}}">
          {{ csrf_field() }}
        <div class="form-group">
            <label for="comment"></label>
          <textarea id="comment" name="comment" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Pievienot</button>
      </form>
      <br><br>
      
      <p><span class="badge">2</span> Komentāri:</p><br>
      
      <div class="row">
          @foreach($events->comments as $com)
          @if($com->article_id==$com->events->id)
          <div>
        <div class="col-sm-2 text-center">
          <img src="bandmember.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
            <h4>{{ $com->User->name }}</h4>
          <p>{{ $com->comment }}</p>
            <small>{{ $com->updated_at }}</small>
          </div>
          <br>
          </div>
            @endif
            @endforeach
@endsection