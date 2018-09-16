

@extends('layouts.app')

@section('content')
<h1>Posts</h1>
    @if(count($posts) > 0)
    <h1>Posts</h1>
        @foreach($posts as $post)
            <div class="card">
                <div class="card-body">  
                    <h3><a href="http://localhost/lsapp/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}}</small>
                </div>        
            </br>
            </div>
        @endforeach    
        {{$posts->links()}}
    @else
        <p>No Posts Found</p>
    @endif
@endsection
