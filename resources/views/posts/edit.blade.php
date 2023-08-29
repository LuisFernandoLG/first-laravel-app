<x-layouts.app title="Edit Post" description="This is the edit post page">
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PATCH')
        @include('posts.form-fields')
        <br>
        <button class="btn edit-btn" type="submit">Update</button>
    </form>
</x-layouts.app>
