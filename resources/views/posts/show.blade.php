<x-layouts.app :title="$post->title" description="estás en un post solito">
    <article>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
    </article>

    <a href="{{ route('posts.index') }}">Go Back</a>
</x-layouts.app>
