<?php

namespace App\Http\Controllers;

use App\Http\Requests\savePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('create', 'store', 'edit', 'update', 'destroy');
    }


    public function index()
    {
        // Eloquent asume que el nombre de la tabla es 'posts'
        $posts = Post::get();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post)
    {
        // Eloquent asume que el nombre de la tabla es 'posts'

        // Laravel convierte los objetos en JSON
        // return $post;
        // return view('post', [
        //     'post' => $post
        // ]);

        return view('posts.show', [
            'post' => $post
        ]);
    }
    public function create()
    {
        return view('posts.create', [
            'post' => new Post
        ]);
    }

    public function store(savePostRequest $request)
    {

        // Siempre usar el método validated, ya que SOLO devuelve los campos que nosotros validamos, y no otros que puedan ser inyectado.

        Post::create($request->validated());

        return to_route('posts.index')->with('status', 'Post was created');
    }

    public function edit(Post $post)
    {

        return view('posts.edit', ['post' => $post]);
    }

    // cuando indicamos que es de tipo Post, laravel lo busca automaticamente en la base de datos
    public function update(savePostRequest $request, Post $post)
    {
        $post->update($request->validated());
        return to_route('posts.show', $post)->with('status', 'Post was updated');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('posts.index')->with('status', 'Post was deleted');
    }
}
