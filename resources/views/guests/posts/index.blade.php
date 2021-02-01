@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blog list Post</h1>

    @if($posts->isEmpty())
        <h2>No Post Avaiable</h2>
    @else
    {{-- 
        POST TABLE 
        --}}
        @foreach ($posts as $post)
            <article class="mb-5">
                <h2>{{$post->title}}</h2>
                <div class="info">
                    By {{$post->user->name}}
                    <div class="date">{{$post->updated_at->diffForHumans()}}</div>
                </div>
                <a href="{{route('posts.show', $post->slug)}}">Read more</a>
            </article>
        @endforeach
    @endif
    


</div>
@endsection
