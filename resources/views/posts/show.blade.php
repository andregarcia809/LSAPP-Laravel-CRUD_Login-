@extends('layouts/app')

@section('content')
<a href="/posts" class="btn btn-outline-secondary mb-2" role="button"><span><<</span> Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>{!!$post->body!!}</div> {{--  !!Parse as HTML comming from editor --}}
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a class="btn btn-outline-secondary" href="/posts/{{$post->id}}/edit" role="button">Edit</a>
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => ' float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('DELETE', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection