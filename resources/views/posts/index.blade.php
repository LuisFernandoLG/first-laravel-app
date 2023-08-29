<x-layouts.app title="Blog" description="This is our blog page">

    <h1 class="page__title">Blog</h1>
    @auth
        <a class="btn new-btn" href="{{ route('posts.create') }}">Crear nuevo post</a>
    @endauth

    {{-- @foreach ($posts as $post)
        <h2> {{ $post->title }}</h2>
    @endforeach --}}
    <ul class="posts-container">
        @foreach ($posts as $post)
            <li class="post-card">
                <a class="post-card__title" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                <p class="post-card__body">{{ $post->body }}</p>
                @auth
                    <div class="options">
                        <a class="options__edit" href="{{ route('posts.edit', $post) }}"> editar </a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="options__delete">Delete</button>
                        </form>
                    </div>
                </li>
            @endauth
        @endforeach
    </ul>

</x-layouts.app>
