@extends('Layouts.app')

@section('content')

<h1>Create Post</h1>
{!! Form::open(['action' => 'postControl@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('appName', 'App')}}
        {{Form::text('appName', '', ['class' => 'form-control', 'placeholder' => 'App Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('Btype', 'Body Type')}}
        {{Form::textarea('Btype', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
   
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
  
@endsection