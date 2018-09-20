@extends('layouts.app')

@section('content')
    <div>
        </br>
        </br>
        </br>
        <h1>{{$posts->title}}</h1>
        <small>Written on {{$posts->created_at}} by {{$posts->user->name}}</small>
    </div>
    <div>
        {!!$posts->body!!}
    </div>
    @if(!Auth::guest())
        @if(Auth::user()->id ==$posts->user_id)
            <a href = "http://localhost/laravel-blog/public/posts/{{$posts->id}}/edit" class="btn btn-secondary btn-lg">Edit</a>
            {!!Form::open(['action'=>['PostsController@destroy', $posts->id],'method'=>'POST', 'class'=>'float-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('DELETE',['class'=> 'btn btn-danger'])}}
            {!!Form::close() !!}
        @endif  
    @endif    
@endsection

