@extends('Layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->appName}}</h1>
    <br><br>
    <div>
        {!!$post->Btype!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} </small>
    <hr>
    
@endsection