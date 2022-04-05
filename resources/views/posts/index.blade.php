@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <div class="col-md-8">
    <h1 class="text-dark">Posts</h1>
        @forelse($posts as $post)
            <a href="{{ route('posts.show', $post->id)}}">
                {{ $post->title}} ({{ $post->comments->count() }})
            </a>
            <hr/>
            @empty
            <p>Não tem posts</p>
        @endforelse
    </div>

        <!-- { !! $posts->links() !!} -->
    </div>


</div>
@endsection
