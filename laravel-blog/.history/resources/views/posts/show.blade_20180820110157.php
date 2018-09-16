@extends('layouts.app')

@section('content')
    <div>
        </br>
        </br>
        </br>
        <h1>{{$posts->title}}</h1>
         <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    </div>
    <div>
        {!!$posts->body!!}
    </div>
    
    <a href = "http://localhost/lsapp/public/posts/{{$posts->id}}/edit" class="btn btn-secondary btn-lg">Edit</a>
    {!!Form::open(['action'=>['PostsController@destroy', $posts->id],'method'=>'POST', 'class'=>'float-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('DELETE',['class'=> 'btn btn-danger'])}}
    {!!Form::close() !!}
@endsection

