@extends('Layouts.app')

@section('content')
    <h1> Posts</h1>
    @if(count($qry)>1)
        @foreach ($qry as $q)
            <div class="well">
            <h3> <a href="/posts/{{$q->id}}">{{$q->appName}}</a></h3>
            <p>{{$q->Btype}}</p>
            <small>{{$q->created_at}}</small>
            <br>
            <br>
            </div>          
        @endforeach
    @else

    @endif

@endsection