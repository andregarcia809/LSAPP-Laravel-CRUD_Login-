@extends('layouts/app')

@section('content')
<a href="/posts" class="btn btn-outline-secondary mb-2" role="button"><span><<</span> Go Back</a>
    <h1>{{$post->title}}</h1>
    <img src="/storage/cover_images/{{$post->cover_image}}" class="img-fluid" alt="image">
    <span class="d-block"></span>
    <div>{!!$post->body!!}</div> {{--  !!Parse as HTML comming from editor --}}
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @auth
        @if (!Auth::guest())
            @if (Auth::user()->id === $post->user_id)
                <a class="btn btn-outline-secondary" href="/posts/{{$post->id}}/edit" role="button">Edit</a>

                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => ' float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('DELETE', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif
    @endauth
@endsection