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
    <a href = "http://localhost/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-secondary btn-lg">Go Back</a>
@endsection

