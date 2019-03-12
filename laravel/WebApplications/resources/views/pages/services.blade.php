@extends('Layouts.app')

    @section('content')
      <h1>{{$var}} </h1>
      <p> Provided by me</p>
      @if(count($serv)>0)
        <ul class="list-group">
          @foreach($serv as $s)
            <li class="list-group-item"> {{$s}}</li>
          @endforeach
        </ul>  
      @endif
    @endsection