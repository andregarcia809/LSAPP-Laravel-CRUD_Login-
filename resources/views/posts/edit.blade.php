@extends('layouts/app')

@section('content')
    <h1>Edit Post</h1>
    {{ Form::open(['action' => ['PostsController@update', $post->id,],  'method' => 'POST']) }}
	<div class="form-group">
        {{Form::label('title', 'Title', ['for' => 'title'])}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title', 'id' => 'title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body Text...', 'id' => 'article-ckeditor'])}}
    </div>
    {{-- (Spoofing a PUT request)  --}}
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary btn-block'])}}
    {{ Form::close() }}
@endsection