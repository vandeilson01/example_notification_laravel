<hr>

@if(auth()->check())

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('sucess')}}
            Comentário realizando
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
<form action="{{ route('comment.store',$post->id )}}" method="post" class="form">
    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <div class="form-group">
        <input type="text" name="title" placeholder="Titular" class="form-control">
    </div>
    <div class="form-group">
        <textarea class="form-control" name="body" cols="30" rows="10" placeholder="Comentario.."></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
@else
    <p>Faça o login <a href="{{ route('login')}}">aqui</a> primeiro</p>
@endif

<hr/>
<h3>Comentário {{ $post->comments->count()}}</h3>
@forelse($post->comments as $comment)
    <p>
        <b>{{ $comment->user->name }} comentou: </b>
        {{ $comment->title }} - {{ $comment->body }}
    </p>

    <hr/>
    @empty

@endforelse