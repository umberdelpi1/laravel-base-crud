@extends('layout')
@section('main')
  <div class="main">
    @foreach ($cagnoliniDb as $cane)
      <a href="{{route('showCagnolini', $cane['id'])}}"><h1> > {{$cane['nome']}} < </h1></a><br>
    @endforeach
  </div>
@endsection
