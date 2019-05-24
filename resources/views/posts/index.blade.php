@extends('layouts/app')

@section('content')
    <h1>Post</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card card-body bg-ligh mb-4">
               <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
         <p>No Post found</p>
    @endif
@endsection