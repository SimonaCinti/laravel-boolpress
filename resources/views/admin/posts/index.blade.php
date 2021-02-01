@extends('layouts.app')

@section('content')
<div class="container">
    <h1>YOUR POSTS</h1>

    @if($posts->isEmpty())
        <h2>No Post Avaiable</h2>
    @else
    
    @endif

</div>
@endsection
