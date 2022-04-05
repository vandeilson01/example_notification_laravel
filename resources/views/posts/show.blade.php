@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <div class="col-md-12">
    <h1 class="text-dark">{{ $post->title }}</h1>
        <div class="col-md-8">
            {{ $post->body }}
        </div>
    </div>

    <div class="col-md-12">

        @include('posts.comments.comment')

    </div>
        <!-- { !! $posts->links() !!} -->
    </div>


</div>
@endsection
