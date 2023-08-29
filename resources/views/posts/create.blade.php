<x-layouts.app title="Blog" description="This is our blog page">
    <h1>Crear un nuevo post</h1>


    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @include('posts.form-fields')

        <button class="btn edit-btn" type="submit">Crear post</button>
    </form>

</x-layouts.app>
