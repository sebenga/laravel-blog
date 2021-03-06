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
    
    <a href = "http://localhost/lsapp/public/posts/{{$posts->id}}/edit" class="btn btn-secondary btn-lg">Edit</a>
    {!!Form::open(['action']=>['PostsController@destroy', $post->id],'method'=>'POST', 'class'=>'pull-right'])!!}
        {{Form::hidden_('_method','DELETE')}}
        {{Form::submit('DELETE',['class'=> 'btn btn-danger'])}}
    {!!Form::close() !!}
@endsection

