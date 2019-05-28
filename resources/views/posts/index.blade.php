@extends('layouts/app')

@section('content')
    <h1>Post</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card card-body bg-ligh mb-4">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/cover_image/{{$post->cover_image}}" alt="image">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                </div>
            </div>
        @endforeach
    @else
         <p>No Post found</p>
    @endif
@endsection