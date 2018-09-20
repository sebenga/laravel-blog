@extends('layouts.app')

@section('content')
    <div>
        </br>
        </br>
        </br>
        <a href = "http://localhost/lsapp/public/posts" class="btn btn-secondary btn-lg">Go Back</a>
        <h1>{{$posts->title}}</h1>
        <small>Written on {{$posts->created_at}}</small>
    </div>
    <div>
        {!!$posts->body!!}
    </div>
@endsection

