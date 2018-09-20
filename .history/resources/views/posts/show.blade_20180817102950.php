@extends('layouts.app')

@section('content')
    <div>
        </br>
        </br>
        </br>
        <h1>{{$posts->title}}</h1>
        <small>Written on {{$posts->created_at}}</small>
    </div>
    <div>
        {!!$posts->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href = "http://localhost/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-secondary btn-lg">Edit</a>
@endsection

